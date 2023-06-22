<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createUser(Request $req)
    {
        // $req->validate([
        //     'name'=>'required',
        //     'email'=>'required ',
        //     'username'=>'required',
        //     'phone'=>'required',
        //     'password'=>'required',
        // ]);
        
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->save();
        return redirect(route('users'));
        
    }
}
