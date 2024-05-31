<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
            $query->select('id','title','code')->where(['status'=>'1']);
        },
        'products' => function($query) {
            $query->where(['status'=>'1'])->with(['categories' => function($subquery){
                $subquery->select('title','code')->where(['status'=>'1']);
            }]);
        },
        ])
        ->firstOrFail()
        ->toArray();

        return view('mytheme.catalog.detail', ['catalog' => $catalog]);
   
    }
}
