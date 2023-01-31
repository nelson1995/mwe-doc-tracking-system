<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
     public function index()
    {
    	Session(['title'=>'Users']);
    	$users = User::get();
    	return view('users.index')->with(['users'=>$users]);
    }

     public function create()
    {
    	Session(['title'=>'Create User']);
    	$user = new User;
        $roles = Role::all();
    	return view('users.create')->with(['user'=>$user,'roles' =>$roles]);
    }

    public function store(Request $request){
    	if($request->id){
            $user = User::find($request->id);

        }else{
            $user = new User();
        }
        $user->email = $request->email;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->mname = $request->mname;
        $user->sex = 1;//$request->sex;
        $user->nin = $request->nin;
        $user->office_id = $request->office_id;
        $user->phone = $request->phone;
        $user->alt_phone = $request->alt_phone;
       	$user->signature = "";
       	$user->password = Hash::make($request->password);
        $role= Role::where('code',$request->user_role)->get();
        $user->assignRole($role);
       	$user->save();
        return redirect('users');
	}
      

}
