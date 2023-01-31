<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Promise\Promise;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['title' => 'Roles']);
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        
        return view('settings.roles-permissions.roles.index')
        ->with([
            'roles'=>$roles,
            'permissions'=>$permissions,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session(['title' => 'Create role']);

        $permissions=Permission::all();
        return view('settings.roles-permissions.roles.create')->with(['permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $role = Role::create([
            "name"=>$request->role,
            "code" => $request->code,
            "rank" => $request->rank
        ]);

        if(!$role){
            return Redirect::back()->withErrors("Failed to create role");
        }

        $role->syncPermissions($request->permissions);
        return redirect()->route('list_roles');
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
        session(['title' => 'Edit role']);

        $role = Role::query()->where('id',$id)->with('permissions')->first();
        $permissions = Permission::all();

        return response()->json([
            "role"=>$role,
            "permissions"=>$permissions
        ]);
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
        $role = Role::query()->where('id',$request->id)->first();
        $role->name = $request->role;
        $role->code = $request->code;
        $role->rank = $request->rank;
        $role->save();
        if(!$role){
            return Redirect::back()->withErrors("Failed to update role");
        }
        $role->syncPermissions($request->permissions);
        return redirect()->route('list_roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::query()->where('id',$id)->delete();
        if(!$role){
            return response()->json(["Fail"=>"failed to delete role."]);
        }
        return response()->json(['success'=>'Role deleted successfully.']);
    }
}
