<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Course;
use App\Models\Backend\Program;
use App\Http\Controllers\backend\BackendBaseController;

class CourseController extends BackendBaseController
{
    //
    protected $base_route = 'backend.course.';
    protected $base_view = 'backend.course.';
    protected $module = 'Course';
    public function __construct()
    {
        $this->model= new Course();
    }
    public function index()
    {
        $data['records'] = $this->model::all();
        return view($this->__loadDataToView($this->base_view.'index'), compact('data'));
    }
    public function create()
    {
        $data['programs'] = Program::pluck('title','id');
        return view($this->__loadDataToView($this->base_view .'create'),compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'course_code'=>'required',
        ]);
        try{
            $request->request->add(['created_by'=>auth()->user()->id]);
            $record=$this->model::create($request->all());
            if($record)
            {
                request()->session()->flash('success',($this->__loadDataToView($this->module))."Created");
            }else{
                request()->session()->flash('error',($this->__loadDataToView($this->module))."Creation Failed ");
            }
        }
        catch(\Exception $exception){
            request()->session()->flash('error',"Error:".$exception->getMessage());
        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
    public function show($id)
    {
        $data['record'] = $this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        return view($this->__loadDataToView($this->base_view.'show'),compact('data'));
    }
    public function edit($id)
    {
        $data['programs'] = Program::pluck('title','id');
        $data['record'] = $this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        return view($this->__loadDataToView($this->base_view.'edit '),compact('data'));
    }
    public function update(Request $request, $id)
    {

        try{
            $data['record']=$this->model::find($id);
            if(!$data['record' ]){
                request()->session()->flash('error',"Error:Invalid Request");
                return redirect()->route($this->__loadDataToView($this->base_route.'index'));
            }
            $request->request->add(['updated_by'=>auth()->user()->id]);
            $record=$data['record']->update($request->all());
            if($record)
            {
                request()->session()->flash('success',($this->__loadDataToView($this->module))."Updated");
            }else{
                request()->session()->flash('error',($this->__loadDataToView($this->module))."Updation Failed ");

            }
        }
        catch(\Exception $exception){
            request()->session()->flash('error',"Error:".$exception->getMessage());

        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
    public function destroy($id)
    {
        $data['record']=$this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        if($data["record"]->delete())
        {
            request()->session()->flash('success',"Successfully Deleted");

        }else{
            request()->session()->flash('error',"Error:Delete Failed ");

        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
    public function trash()
    {
        $data['records'] = $this->model::onlyTrashed()->get();
        return view($this->__loadDataToView($this->base_view.'trash'), compact('data'));
    }
    public function restore(Request $request, $id)
    {
        try{
            $data['record']=$this->model::onlyTrashed()->where('id',$id)->first();
            if(!$data['record'])
            {
                request()->session()->flash('error',"Error:Invalid Request");
                return redirect()->route($this->__loadDataToView($this->base_route."index"));
            }
            if($data['record'])
            {
                $data['record']->restore();
                request()->session()->flash('success',"Restored Successfully");

            }
            else
            {
                request()->session()->flash('error',"Updation Failed");
            }
        }
        catch(Exception $exception)
        {
            request()->session()->flash('error',"Error:".$exception->getMessage());
        }
        return redirect()->route($this->__loadDataToView($this->base_route."index"));
    }
    public function permanentDelete($id)
    {
        $data['record']=$this->model::onlyTrashed()->where('id',$id)->first();
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        if($data["record"]->forceDelete())
        {
            request()->session()->flash('success',"Successfully Deleted");

        }else{
            request()->session()->flash('error',"Error:Delete Failed ");
        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
}
