<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Traits\ResourceTrait;

use App\Models\Blog;
use App\Models\Category;
use view;

class BlogController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Blog;
        $this->route .= '.blogs';
        $this->views .= '.blogs';

        $this->permissions = ['list'=>'blog_listing', 'create'=>'blog_adding', 'edit'=>'blog_editing', 'delete'=>'blog_deleting'];
        $this->resourceConstruct();

    }
    
    protected function getCollection() {
        return $this->model->select('id', 'slug', 'name', 'title', 'status', 'created_at', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    protected function getSearchSettings(){}

    public function create()
    {
        $categories = Category::where('parent_id',0)->where('category_type', 'Blog')->get();
        return view::make($this->views . '.form', array('obj'=>$this->model, 'categories'=>$categories));
    }

    public function edit($id) {
        $id = decrypt($id);
        if($obj = $this->model->find($id)){
            $categories = Category::where('parent_id',0)->where('category_type', 'Blog')->get();
            return view($this->views . '.form')->with('obj', $obj)->with('categories', $categories);
        } else {
            return $this->redirect('notfound');
        }
    }
}
