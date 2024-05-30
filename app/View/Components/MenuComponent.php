<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Menu;

class MenuComponent extends Component
{
    public $menuid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($menuid)
    {
        $this->menuid = $menuid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $menu = Menu::where(
            [
                'id' => $this->menuid,
            ])
            ->with(['items' => function($query) {
                $query->where('status', 1)
                ->orderBy('priority', 'asc');
            }])
            ->get()->toArray();
 

        return view('components.menu-component', ['menu' => $menu]);
    }
}
