<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\MailSettings;
use App\Mail\Test;
use App\Models\FrontendPage;
use App\Models\Location;
use App\Models\Blog;

class MainController extends Controller
{
   
    public function index(){
        $home_settings = Cache::get('home_settings', function () {
            $page = FrontendPage::where('slug', 'index')->first();
            return $page;
        });
        $locations = Location::where('is_featured', 1)->where('status', 1)->orderBy('priority')->get();
        $blogs = Blog::where('is_featured', 1)->where('status', 1)->orderBy('created_at', 'DESC')->take(5)->get();
        $first_blog = null;
        if(count($blogs)){
            $first_blog = $blogs[0];
            unset($blogs[0]);
        }
        return view('client.index')->with('page_details', $home_settings)->with('locations', $locations)->with('blogs', $blogs)->with('first_blog', $first_blog);
    }

    public function contact_us(){
        $contact_settings = Cache::get('contact_settings', function () {
            $page = FrontendPage::where('slug', 'contact-us')->first();
            return $page;
        });
        return view('client.contact_us')->with('page_details', $contact_settings);
    }

    public function partners(){
        $partner_settings = Cache::get('partner_settings', function () {
            $page = FrontendPage::where('slug', 'partners')->first();
            return $page;
        });
        return view('client.partners')->with('page_details', $partner_settings);
    }

    public function test_mail()
    {
        $mail = new MailSettings;
        $mail->to('sobha@spiderworks.in')->cc('sobha.ashtaman@gmail.com')->send(new Test([]));
        echo "Mail send";exit;
    }

}
