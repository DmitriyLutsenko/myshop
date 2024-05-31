<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function categoryByCode($code) {
        
        if ($code == null) return redirect('/', 301);

        $catalog = Category::where([
            'code' => $code,
            'status' => 1,
        ])
        ->with([
            'childrenCategories' => function($query) {
                $query->select('id','title','code')->where(['status' => '1']);
            }
        ])
        ->firstOrFail();
 
        $products = Product::whereHas('categories', function($query) use ($catalog) {
            $query->where('categories.id', $catalog->id)->where('status', '1');
        })
        ->with(['categories' => function($query){
            $query->select('title', 'code')->where('status', '1');
        }])
        ->where('status', '1')
        ->paginate(2);
 
        return view('mytheme.catalog.detail', [
            'catalog' => $catalog,
            'products' => $products
        ]);
   
    }
}
