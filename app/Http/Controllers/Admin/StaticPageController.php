<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Traits\ResourceTrait;

use App\Models\FrontendPage;
use Illuminate\Http\Request;
use View, Redirect;

class StaticPageController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new FrontendPage;
        $this->route .= '.static-pages';
        $this->views .= '.static_pages';

        $this->permissions = ['list'=>'static_pages_listing', 'create'=>'', 'edit'=>'static_pages_editing', 'delete'=>''];
        $this->resourceConstruct();

    }
    
    protected function getCollection() {
        return $this->model->select('id', 'slug', 'name', 'title', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    protected function getSearchSettings(){}

    public function store()
    {
        $this->model->validate();
        $data = request()->all();
        $data['status'] = isset($data['status'])?1:0;
        $data['content'] = (!empty($data['content']))?json_encode($data['content']):NULL;
        $this->model->fill($data);
        $this->model->save();
        return Redirect::to(route($this->route. '.edit', ['id'=> encrypt($this->model->id)]))->withSuccess('Page successfully saved!');
    }

    public function update()
    {
    	$data = request()->all();
    	$id = decrypt($data['id']);
        $this->model->validate(request()->all(), $id);
         if($obj = $this->model->find($id)){
            $data['status'] = isset($data['status'])?1:0;
            $data['content'] = (!empty($data['content']))?json_encode($data['content']):NULL;
            $obj->update($data);

            return Redirect::to(route($this->route. '.edit', ['id'=>encrypt($id)]))->withSuccess('Page successfully updated!');
        } else {
            return Redirect::back()
                    ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                    ->withInput(request()->all());
        }
    }

}
