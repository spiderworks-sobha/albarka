<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\BaseController as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\FrontendPage;
use App\Models\Location;

class LocationController extends Controller
{
   
    public function index()
    {
        return abort('404');
        $location_settings = Cache::get('location_settings', function () {
            $page = FrontendPage::where('slug', 'location')->first();
            return $page;
        });

        $locations = Location::with(['featured_image'])->where('status', 1)->orderBy('created_at', 'DESC')->get();
        return view('client.locations.index', ['locations'=>$locations]);
    }

    public function details($slug)
    {
        $location = Location::where('slug', $slug)->where('status', 1)->first();
        if($location)
        {
            return view('client.locations.details', [ 'location'=>$location]);
        }
        else
            return $this->_404();
    }

}
