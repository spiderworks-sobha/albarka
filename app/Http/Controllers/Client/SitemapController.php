<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use DB;

class SitemapController extends Controller
{
    public function index()
    {
        $items = DB::table('frontend_pages')->whereNotIn('slug', ['university.view'])->get();
        return response()->view('client.sitemaps.index', ['items'=>$items])->header('Content-Type', 'text/xml');
    }
    
    public function services()
    {
        $items = DB::table('services')->select('slug')->where('status', 1)->get();
        return response()->view('client.sitemaps.services', ['items'=>$items])->header('Content-Type', 'text/xml');
    }
    
    public function blogs()
    {
        $items = DB::table('blogs')->select('slug')->where('status', 1)->get();
        return response()->view('client.sitemaps.blogs', ['items'=>$items])->header('Content-Type', 'text/xml');
    }

}