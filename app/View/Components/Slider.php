<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Slider as SliderModel;
class Slider extends Component
{

    public $sliderid;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sliderid)
    {
        $this->sliderid = $sliderid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $slider = SliderModel::where(
            [
                'id' => $this->sliderid,
                'status' => 1
            ])
            ->with(['slides' => function($query) {
                $query->where(['status'=>'1']);
            }])
            ->get()->toArray();
 
        return view('components.slider', ['slider'=>$slider]);
    }
}
