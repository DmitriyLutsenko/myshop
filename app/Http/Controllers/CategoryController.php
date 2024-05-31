<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function category() {
        


        $catalog = Category::where([
            'category_id' => NULL,
        ])
        ->select(['title', 'code'])
        ->get();
        
        $products = Product::where(['status' => '1'])
        ->with(['categories' => function($query){
            $query->select('title', 'code')->where('status', '1');
        }])
        ->where('status', '1')
        ->paginate(8);
 
        return view('mytheme.catalog.index', [
            'catalog' => $catalog,
            'products' => $products
        ]);
    }

    public function categoryByCode($code) {
        
        if ($code == null) return redirect()->route('category');

        $catalog = Category::where([
            'code' => $code,
            'status' => 1,
        ])
        ->with([
            'childrenCategories' => function($query) {
                $query->select('id','title','code')->where(['status' => '1']);
            }
        ])
        ->first();

        if($catalog == NULL) return redirect()->route('category');
 
        $products = Product::whereHas('categories', function($query) use ($catalog) {
            $query->where('categories.id', $catalog->id)->where('status', '1');
        })
        ->with(['categories' => function($query){
            $query->select('title', 'code')->where('status', '1');
        }])
        ->where('status', '1')
        ->paginate(8);
 
        return view('mytheme.catalog.detail', [
            'catalog' => $catalog,
            'products' => $products
        ]);
   
    }
}
