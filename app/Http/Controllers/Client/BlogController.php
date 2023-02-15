<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\FrontendPage;
use App\Models\Blog;

class BlogController extends Controller
{
   
    public function index()
    {
        $blog_settings = Cache::get('blog_settings', function () {
            $page = FrontendPage::where('slug', 'blog')->first();
            return $page;
        });
        $latest_blog = Blog::with(['banner_image', 'category'])->where('status', 1)->orderBy('created_at', 'DESC')->first();
        $blogs = [];
        if($latest_blog)
            $blogs = Blog::with(['featured_image', 'category'])->where('status', 1)->where('id', '!=', $latest_blog->id)->orderBy('created_at', 'DESC')->get();
        return view('client.blogs.index', ['blogs'=>$blogs, 'page_details'=>$blog_settings, 'latest_blog'=>$latest_blog]);
    }

    public function details($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->first();
        if($blog)
        {
            $latest_blogs = Blog::with(['banner_image'])->where('status', 1)->where('id', '!=', $blog->id)->orderBy('created_at', 'DESC')->take(4)->get();
            return view('client.blogs.details', [ 'blog'=>$blog, 'latest_blogs'=>$latest_blogs]);
        }
        else
            return abort('404');
    }

}
