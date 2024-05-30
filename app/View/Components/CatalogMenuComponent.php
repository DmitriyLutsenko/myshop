<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
class CatalogMenuComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $catalog = Category::select('id', 'title', 'code', 'category_id')->where([
            'category_id' => NULL,
            'status' => 1,
        ])
        ->with(['childrenCategories' => function($query) {
            $query->select('id', 'title', 'code', 'category_id')->where(['status'=>'1']);
        }])
        ->get()
        ->toArray();

        return view('components.catalog-menu-component', ['catalog' => $catalog]);
    }
}
