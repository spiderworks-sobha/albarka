<?php 
namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;

class BaseController extends Controller {
    public function _404(){
        $from_url = request()->path();
        $check_redirect = \DB::table('redirects')->where('redirect_from', $from_url)->first();
        if($check_redirect)
        {
            if($check_redirect->redirect_to == '')
                return \Redirect::to(url('/'), 301);
            else
                return \Redirect::to(url($check_redirect->redirect_to), 301);
        }
        return abort('404');
    }
}