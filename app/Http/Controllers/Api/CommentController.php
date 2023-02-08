<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Comment;
use Session;
use Validator, DB;

class CommentController extends Controller
{
   
    public function save(Request $request)
    {
        Validator::extend('spam_check', function ($attribute, $value, $parameters) {
            preg_match('#<a[\s]+([^>]+)>((?:.(?!\<\/a\>))*.)</a>#',$value,$a);
            if($a)
                return false;
            else
            {
                $bHasLink = strpos($value, 'http') !== false || strpos($value, 'www.') !== false;
                if($bHasLink)
                    return false;
                else
                    return true;
            }
        });
        
        $rules = array(
            'name' => 'required|max:255',
            'email' => ['nullable', 'email', 'max:255'],
            'comment' => 'required|spam_check',
        );

        $messages = [
            'name.required' => 'Please enter your name',
            'email.email' => 'Please enter a valid email address',
            'comment.required' => 'Please enter your comment',
            'comment.spam_check' => 'Comment Contains unwanted values.',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails())
        {
            $errors = [];
            foreach($validator->errors()->getMessages() as $key => $message)
                $errors[$key] = $message[0];
            return response()->json(['errors'=>$errors]);
        }
        else{
            $comment = new Comment;
            if($data['parent_id'] == 0)
                $data['parent_levels_id'] = 0;
            else
                $data['parent_levels_id'] = $this->getRoot($data['parent_id']);
            $comment->fill($data);
            $comment->save();
            if(Session::has('comments'))
            {
                $session_comments = Session::get('comments');
                $session_comments[] = $comment->id;
                Session::put('comments', $session_comments);
            }
            else{
                $session_comments = [];
                $session_comments[] = $comment->id;
                Session::put('comments', $session_comments);
            }

            if($data['parent_id'] == 0)
            {
                return response()->json($comment);
            }
            else{
                $comments = Comment::with(['children'=> function($query){
                    $query->where(function($query1){
                        $query1->where('status', 1);
                        if(Session::has('comments')){
                            $session_comments = Session::get('comments');
                            $query1->OrwhereIn('id', $session_comments);
                        }
                    });
                }])->where('linkable_type', $data['linkable_type'])->where('linkable_id', $data['linkable_id'])->where('id', $data['parent_levels_id'])->first();

                if(count($comments->children)>0)
                {
                    $comments->children = $comments->children->map(function($child){
                        $child->comment = '<span class="tag-name">@'.$child->parant->name.'</span>'.$child->comment;
                        return $child;
                    });
                }

                return response()->json($comments);
            }
        }
    }

    public function getRoot($parent_id)
    {
        $id = 0;
        while ($parent_id != 0) {
            $parent = DB::table('comments')->select('id', 'parent_id')->where('id', $parent_id)->first();
            $parent_id = $parent->parent_id;
            $id = $parent->id;
        }

        return $id;
    }

    public function list($id, $type)
    {

        switch ($type) {
            case 'Blog':
                $model = 'App\\Models\\'.$type;
                break;
        }
        $comments = Comment::with(['children'=> function($query){
                    $query->where(function($query1){
                        $query1->where('status', 1);
                        if(Session::has('comments')){
                            $session_comments = Session::get('comments');
                            $query1->OrwhereIn('id', $session_comments);
                        }
                    });
                }])->where('linkable_type', $model)->where('linkable_id', $id)->where('parent_id', 0)->where(function($query){
                    $query->where('status', 1);
                    if(Session::has('comments')){
                        $session_comments = Session::get('comments');
                        $query->OrwhereIn('id', $session_comments);
                    }
                })->orderBy('created_at', 'DESC')->paginate(5);

        $comments = $this->parse_replys($comments);

        return response()->json($comments);
    }

    public function parse_replys($comments)
    {
        foreach ($comments as $key => $comment) {
            if(count($comment->children)>0)
            {
                $children = $comment->children->map(function($child){
                    $child->comment = '<span class="tag-name">@'.$child->parant->name.'</span>'.$child->comment;
                    return $child;
                });
                $comment->children = $children;
            }
        }
        return $comments;
    }

}
