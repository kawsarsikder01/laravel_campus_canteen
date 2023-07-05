<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class Setting extends Controller
{
    public function index()
    {
     return view('admin.add_user');
    }
    public function index2()
    {
        $users = User::All();
     return view('admin.users',['users'=>$users]);
    }
    public function index3()
    {
     return view('admin.user_role');
    }
    public function index4()
    {
     $users = User::All();
     $role = Role::All();
     return view('admin.permission',['users'=>$users],['rolles'=>$role]);
    }
}
