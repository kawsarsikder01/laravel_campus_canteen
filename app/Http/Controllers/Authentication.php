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
    if(\Auth::attempt($req->only('email','password'))){
        return redirect(route('dashboard'));
    }
    return redirect(route('index'));
   }
   public function auth(Request $req)
   {
    $req->validate([
        'email' => 'required',
        'password' => 'required'
    ]);
    if(\Auth::attempt($req->only('email','password'))){
        return redirect(route('dashboard'));
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
