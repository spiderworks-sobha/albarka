<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Widget;

class Faq extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $faq=null)
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
        $faq_content= Cache::get('faq_content', function () {
            return Widget::find(2);
        });
        return view('components.faq')->with('faq_content', json_decode($faq_content->content));
    }
}
