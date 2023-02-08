<?php

namespace App\Http\Controllers\Client;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Comment;

class CommentController extends Controller
{
   
    public function save()
    {
        $blogs = Blog::with(['featured_image', 'category'])->where('status', 1)->orderBy('created_at', 'DESC')->get();
        return view('client.blogs.index', ['blogs'=>$blogs]);
    }

    public function details($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->first();
        if($blog)
        {
            // $content = FrontendPage::select('content')->where('slug', 'blog.index')->first();
            // $common_content = $content->content;
            $latest_blogs = Blog::with(['featured_image'])->where('status', 1)->where('id', '!=', $blog->id)->orderBy('created_at', 'DESC')->get();
            return view('client.blogs.details', [ 'blog'=>$blog, 'latest_blogs'=>$latest_blogs]);
        }
        else
            abort('404');
    }

}
