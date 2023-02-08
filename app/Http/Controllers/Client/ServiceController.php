<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\FrontendPage;
use App\Models\Service;

class ServiceController extends Controller
{
   
    public function index()
    {
        $service_settings = Cache::get('service_settings', function () {
            $page = FrontendPage::where('slug', 'service')->first();
            return $page;
        });

        $services = Service::where('status', 1)->orderBy('priority')->get();
        return view('client.services.index', ['services'=>$services, 'page_details'=>$service_settings]);
    }

}
