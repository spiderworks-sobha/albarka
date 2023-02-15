<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Location;

class LocationForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $form, public $locations=null, public $selected=null)
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
        return view('components.location-form')->with('locations', $this->locations)->with('form', $this->form)->with('selected', $this->selected);
    }
}
