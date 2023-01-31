<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use App\SubDepartment;
use App\Branch;
use Response;

class OfficeController extends Controller
{
    public function index()
    {
    	Session(['title'=>'Offices']);
    	$offices = Office::get();
        $office = new Office;
        $sub_departments = SubDepartment::get();
        $branches = Branch::get();
    	return view('offices.index')->with(['offices'=>$offices, 'subdepartments'=>$sub_departments, 'branches'=>$branches]);
    }

    public function create()
    {
    	Session(['title'=>'Create Office']);
    	$office = new Office;
    	$sub_departments = SubDepartment::get();
    	$branches = Branch::get();
    	return view('offices.create')->with(['office'=>$office, 'subdepartments'=>$sub_departments, 'branches'=>$branches]);
    }

    public function store(Request $request)
    {
    	$is_new = false;

    	if($request->id){
    		$office = Office::find($request->id);
    	}else{
    		$is_new = true;
    		$office = new Office;
    	}

    	$office->name = $request->name;
    	$office->location = $request->location;
    	$office->sub_department_id = $request->sub_department_id;
    	$office->branch_id = $request->branch_id;
    	$office->role_id = $request->role_id;
    	$office->person_id = $request->person_id;
    	$office->save();

    	return redirect()->route('list_offices');
    }

    public function edit($id)
    {
    	session(['title' => 'Edit Office']);
    	$office = Office::find($id);
    	$sub_departments = SubDepartment::get();
    	$branches = Branch::get();
    	return view('offices.create')->with(['office'=>$office, 'subdepartments'=>$sub_departments, 'branches'=>$branches]);
    }

    public function delete($id)
    {
    	$office = Office::find($id);
    	$office->delete();
    }

    public function search(Request $request)
    {
        $s = $request->s;
        $offices = Office::select('id', 'name')->where('name', 'LIKE', '%'.$s.'%')->get();
        $suggestions = array();
        foreach ($offices as $office) {
            $suggestions[] = array('value' => $office->name, 'data' => array('id' => $office->id));
        }

        return Response::json(array('suggestions' => $suggestions));
    }
}
