<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchController extends Controller
{
    public function index()
    {
    	Session(['title'=>'Branches']);
    	$branches = Branch::get();
    	return view('branches.index')->with(['branches'=>$branches]);
    }

    public function create()
    {
    	Session(['title'=>'Create Branch']);
    	$branch = new Branch;
    	return view('branches.create')->with(['branch'=>$branch]);
    }

    public function store(Request $request)
    {

    	$is_new = false;

    	if($request->id){
    		$branch = Branch::find($request->id);
    	}else{
    		$is_new = true;
    		$branch = new Branch;
    	}

    	$branch->name = $request->name;
    	$branch->address = $request->address;
    	$branch->save();

    	return redirect()->route('list_branches');
    }

    public function edit($id)
    {
    	session(['title' => 'Edit Branch']);
    	$branch = Branch::find($id);
    	return view('branches.create')->with(['branch'=>$branch]);
    }

    public function delete($id)
    {
    	$branch = Branch::find($id);
    	$branch->delete();
    }
}
