<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Widget;

class DeliveryItems extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $delivery_item_content= Cache::get('delivery_item_content', function () {
            return Widget::find(4);
        });
        return view('components.delivery-items')->with('delivery_item_content', json_decode($delivery_item_content->content));
    }
}
