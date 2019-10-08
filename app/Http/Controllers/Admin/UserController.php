<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function getUsers(){
        $users = User::orderBy('id','desc')->get();
        // dd($users);
        return view('admin.users.list', ['users' => $users]);
    }
    
    public function getAddUser(){
        return view('admin.users.add');
    }

    public function postAddUser(Request $req){
        // dd($req->all());
        $newUser = new User();
        $newUser->name = $req->name;
        $newUser->email = $req->email;
        $newUser->birthday = $req->birthday;
        $newUser->phone_number = $req->phone_number;
        $newUser->password = $req->password;
        $newUser->save();
        return redirect('admin/users');
        
    }

    public function getEditUser($id){
        $user = User::find($id);
        // dd($user);
        return view('admin.users.edit',['user'=>$user]);
    }

    public function postEditUser(Request $req, $id){
        $editUser = User::find($id);
        $editUser->name = $req->name;
        $editUser->email = $req->email;
        $editUser->birthday = $req->birthday;
        $editUser->phone_number = $req->phone_number;
        $editUser->password = $req->password;
        $editUser->save();
        return redirect('admin/users');
    }

    public function deleteUser($id){
        $delUser = User::find($id);
        $delUser->delete();
        return redirect('admin/users');
    }

}
