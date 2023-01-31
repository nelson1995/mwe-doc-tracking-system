<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['title' => 'Permissions']);
        $permissions = Permission::all();
        return view('settings.roles-permissions.permissions.index')->with(['permissions'=>$permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['title' => 'Create permission']);
        return view('settings.roles-permissions.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = Permission::create(["name"=>$request->permission]);
        
        if(!$permission){
            return Redirect::back()->withErrors("Failed to create permission.");
        }
        return redirect()->route('list_permissions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session(['title' => 'Edit permission']);
        $permission = Permission::query()->where('id',$id)->first();
        
        return response()->json(["permission"=>$permission]);
        // return view('settings.roles-permissions.permissions.index')->with(["permission"=>$permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {        
        $permission = Permission::query()->where('id',$request->id)->first();
        $permission->name = $request->permission;
        $permission->save();
        if(!$permission){
            return Redirect::back()->withErrors("Failed to update permission.");
        }
        return redirect()->route('list_permissions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::query()->where('id',$id)->delete();
        if(!$permission){
            return response()->json([
                'error' => "Failed to delete permission"
            ]);
        }
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
