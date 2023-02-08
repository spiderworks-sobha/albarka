<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Location;
use Illuminate\Support\Facades\Cache;
use App\Models\Widget;

class LocationMap extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $locations=null)
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
        if(!$this->locations)
            $this->locations = Location::where('is_featured', 1)->where('status', 1)->orderBy('priority')->get();
        $location_map_content= Cache::get('location_map_content', function () {
            return Widget::find(1);
        });

        return view('components.location-map')->with('map_locations', $this->locations)->with('location_map_content', json_decode($location_map_content->content));
    }
}
