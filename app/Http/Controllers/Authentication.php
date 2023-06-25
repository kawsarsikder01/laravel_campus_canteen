<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class Authentication extends Controller
{
    public function index()
    {
        return view('index');
    }
   public function store(Request $req)
   {
    $req->validate([
        'name' => 'required',
        'email'=>'required',
        'password'=>'required'
    ]);
    $resistration = new User;
    $resistration->name = $req->name;
    $resistration->email = $req->email;
    $resistration->password=$req->password;
    $resistration->save();
    $user = User::where('email',$req->email)->first();
    if(\Auth::attempt($req->only('email','password'))){
        return view('admin.dashboard',['user'=>$user]);
    }
    return redirect(route('index'));
   }
   public function auth(Request $req)
   {
    $req->validate([
        'email' => 'required',
        'password' => 'required'
    ]);
    $user = User::where('email',$req->email)->first();
    if(isset($user->username)){
       
        }
        if(\Auth::attempt($req->only('email','password'))){
            return view('admin.dashboard',['user'=>$user]);
    }
    
    elseif(\Auth::attempt($req->only('email','password'))){
        return view('admin.dashboard',compact('user'));
    }
    else{
        return redirect(route('index'));
    }
   }
   public function logout()
   {
    
    \Auth::logout();
    return redirect(route('index'));
   }
}
