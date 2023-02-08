<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Widget;
use App\Models\Testimonial;

class Testimonials extends Component
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
        $testimonials = Testimonial::where('status', 1)->orderBy('priority')->get();
        $testimonial_content= Cache::get('testimonial_content', function () {
            return Widget::find(5);
        });
        return view('components.testimonials')->with('testimonial_content', json_decode($testimonial_content->content))->with('testimonials', $testimonials);
    }
}
