<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
    	Session(['title'=>'Departments']);
    	$departments = Department::get();
    	return view('settings.departments.index')->with(['departments'=>$departments]);
    }

    public function create()
    {
    	Session(['title'=>'Create Department']);
    	$department = new Department;
    	return view('settings.departments.create')->with(['department'=>$department]);
    }

    public function store(Request $request)
    {

    	$is_new = false;

    	if($request->id){
    		$department = Department::find($request->id);
    	}else{
    		$is_new = true;
    		$department = new Department;
    	}

    	$department->name = $request->name;
    	$department->abbreviation = $request->abbreviation;
    	$department->save();

    	return redirect()->route('list_departments');
    }

    public function edit($id)
    {
    	session(['title' => 'Edit Department']);
    	$department = Department::find($id);
    	return view('settings.departments.create')->with(['department'=>$department]);
    }

    public function delete($id)
    {
    	$department = Department::find($id);
    	$department->delete();
    }
}
