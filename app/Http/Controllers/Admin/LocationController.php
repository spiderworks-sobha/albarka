<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Traits\ResourceTrait;

use App\Models\Location;

use Illuminate\Http\Request;
use View, Redirect, Config;

class LocationController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Location;
        $this->route .= '.locations';
        $this->views .= '.locations';

        $this->permissions = ['list'=>'location_listing', 'create'=>'location_adding', 'edit'=>'location_editing', 'delete'=>'location_deleting'];
        $this->resourceConstruct();

    }

    public function index(Request $request, $parent=null)
    {
        if ($request->ajax()) {
            $collection = $this->getCollection();
            $parent_id = ($parent)?$parent:0;
            $collection->where('locations.parent_id', '=', $parent_id);
            $route = $this->route;
            return $this->setDTData($collection)->make(true);
        } else {
            $parent_data = null;
            if($parent)
                $parent_data = $this->model->find($parent);
            $search_settings = $this->getSearchSettings();
            return view::make($this->views . '.index', array('parent'=>$parent, 'parent_data'=>$parent_data, 'search_settings'=>$search_settings));
        }
    }
    
    protected function getCollection() {
        return $this->model->select('id', 'name', 'parent_id', 'title', 'priority', 'status', 'created_at', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
        	->addColumn('sub-locations', function($obj) use ($route) {
                $has_child = $this->model->where('parent_id', '=', $obj->id)->count();
                return '<a href="' . route( $route . '.index',  [$obj->id] ) . '" class="btn btn-info btn-sm" >Sub-locations (' . $has_child . ')</a>'; 
            })
            ->addColumn('action_delete_location', function($obj) use ($route) { 
                $has_child = $this->model->where('parent_id', '=', $obj->id)->count();
                if($has_child)
                {
                    return '<a href="javascript:void(0);" class= "text-danger delete_have_child" title="Created at : ' . date('d/m/Y - h:i a', strtotime($obj->created_at)) . '" > <i class="fa fa-trash"></i></button>';
                }
                else{
                     return '<a href="' . route( $route . '.destroy',  [encrypt($obj->id)] ) . '" class="text-danger webadmin-btn-warning-popup" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." title="' . ($obj->updated_at ? 'Last updated at : ' . date('d/m/Y - h:i a', strtotime($obj->updated_at)) : '') . '" ><i class="fa fa-trash"></i></a>';  
                }
            })
            ->rawColumns(['action_edit', 'action_delete_location', 'status', 'sub-locations']);
    }

    protected function getSearchSettings(){}

    public function create($parent=null)
    {
        $parent_data = null;
        if($parent)
            $parent_data = $this->model->find($parent);
        $locations = $this->model->where('parent_id',0)->get();
        return view::make($this->views . '.form', array('obj'=>$this->model, 'parent'=>$parent, 'parent_data'=>$parent_data, 'locations'=>$locations));
    }

    public function store()
    {
        $this->model->validate();
        $data = request()->all();
        $data['is_featured'] = isset($data['is_featured'])?1:0;
        $data['priority'] = (!empty($data['priority']))?$data['priority']:0;
        $this->model->fill($data);
        $this->model->save();
        return Redirect::to(route($this->route. '.edit', ['id'=> encrypt($this->model->id)]))->withSuccess('Location successfully saved!');
    }

    public function edit($id) {
    	$id = decrypt($id);
        if($obj = $this->model->find($id)){
            $parent = null;
            if($obj->parent_id >0)
                $parent = $obj->parent_id;
            $parent_data = $this->model->where('parent_id', $obj->parent_id)->first();
            $locations = $this->model->where('parent_id',0)->get();
            return view($this->views . '.form')->with('obj', $obj)->with('parent', $parent)->with('parent_data', $parent_data)->with('locations', $locations);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function update()
    {
    	$data = request()->all();
    	$id = decrypt($data['id']);
        $this->model->validate(request()->all(), $id);
         if($obj = $this->model->find($id)){
            $data['is_featured'] = isset($data['is_featured'])?1:0;
            $data['priority'] = (!empty($data['priority']))?$data['priority']:0;
            $obj->update($data);

            return Redirect::to(route($this->route. '.edit', ['id'=>encrypt($id)]))->withSuccess('Location successfully updated!');
        } else {
            return Redirect::back()
                    ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                    ->withInput(request()->all());
        }
    }
}
