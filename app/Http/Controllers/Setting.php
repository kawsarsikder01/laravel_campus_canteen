<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Auth;

class Setting extends Controller
{
    public function index()
    {
        if(isset(Auth::user()->username)){
            return view('admin.add_user');
        }
        return redirect(route('home'));
    }
    public function index2()
    {
        if(isset(Auth::user()->username)){
            $users = User::All();
            return view('admin.users',['users'=>$users]);
        }
        return redirect(route('home'));
      
    }
    public function index3()
    {
        if(isset(Auth::user()->username)){
            return view('admin.user_role');
        }
        return redirect(route('home'));
    }
    public function index4()
    {
        if(isset(Auth::user()->username)){
            $users = User::All();
            $role = Role::All();
            return view('admin.permission',['users'=>$users],['rolles'=>$role]);
        }
        return redirect(route('home'));
    }
}
