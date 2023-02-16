<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use DB;

class SitemapController extends Controller
{
    public function index(){
        return response()->view('client.sitemaps.index')->header('Content-Type', 'text/xml');
    }
    public function static_pages()
    {
        $items = DB::table('frontend_pages')->whereNotIn('slug', ['location'])->get();
        return response()->view('client.sitemaps.static_pages', ['items'=>$items])->header('Content-Type', 'text/xml');
    }
    
    public function locations()
    {
        $items = DB::table('locations')->select('slug')->where('status', 1)->get();
        return response()->view('client.sitemaps.locations', ['items'=>$items])->header('Content-Type', 'text/xml');
    }
    
    public function blogs()
    {
        $items = DB::table('blogs')->select('slug')->where('status', 1)->get();
        return response()->view('client.sitemaps.blogs', ['items'=>$items])->header('Content-Type', 'text/xml');
    }

}