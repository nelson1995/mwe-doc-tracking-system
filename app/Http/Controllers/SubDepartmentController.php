<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubDepartment;
use App\Department;

class SubDepartmentController extends Controller
{
    public function index()
    {
    	Session(['title'=>'Sub Departments']);
    	$subdepartments = SubDepartment::get();
        $departments = Department::get();
    	return view('sub-departments.index')->with(['subdepartments'=>$subdepartments, 'departments' => $departments
]);
    }

    public function create()
    {
    	Session(['title'=>'Create Sub Department']);
    	$subdepartment = new SubDepartment;
    	$departments = Department::get();
    	return view('sub-departments.create')->with([
    		'subdepartment'=>$subdepartment,
    		'departments' => $departments
    	]);
    }

    public function store(Request $request)
    {
    	$is_new = false;
    	if($request->id){
    		$subdepartment = SubDepartment::find($request->id);
    	}else{
    		$is_new = true;
    		$subdepartment = new SubDepartment;
    	}

    	$subdepartment->name = $request->name;
    	$subdepartment->abbreviation = $request->abbreviation;
    	$subdepartment->department_id = $request->department_id;
    	$subdepartment->save();

    	return redirect()->route('list_sub_departments');
    }

    public function edit($id)
    {
    	session(['title' => 'Edit Sub Department']);
    	$subdepartment = SubDepartment::find($id);
    	$departments = Department::get();
        return view('sub-departments.create')->with([
            'subdepartment'=>$subdepartment,
            'departments' => $departments
        ]);
    }

    public function delete($id)
    {
    	$subdepartment = SubDepartment::find($id);
    	$subdepartment->delete();
    }
}
