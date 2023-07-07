<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class Authentication extends Controller
{
    public function index()
    {
        return redirect(route('userlogin'));
    }
   public function store(Request $req)
   {
    $image = $req->file('image');
    $imagename = $image->getClientOriginalName();
    // dd($image);
    // dd($req->image);
    // dd($req->image);
    // dd($req->all());
    $req->validate([
        'name' => 'required',
        'email'=>'required',
        'address'=>'required',
        'password'=>'required|confirmed|min:6'
    ]);
    // dd('hello');
    $req->image->move(public_path('image'),$imagename);
    $resistration = new User;
    $resistration->name = $req->name;
    $resistration->email = $req->email;
    $resistration->address = $req->address;
    $resistration->image = $imagename;
    $resistration->password=$req->password;
    $resistration->save();
    $user = User::where('email',$req->email)->first();
    if(isset($user->username))
    {
        if(\Auth::attempt($req->only('email','password')))
        {
            return redirect(route('dashboard'));
        }
    }
    elseif(\Auth::attempt($req->only('email','password')))
    {
        return redirect(route('home'));
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
        if(\Auth::attempt($req->only('email','password'))){
            return redirect(route('dashboard'));
         }
    }
       
    
    elseif(\Auth::attempt($req->only('email','password'))){
        return redirect(route('home'));
    }
    else{
        return redirect(route('userlogin'));
    }
   }
   public function logout()
   {
    
    \Auth::logout();
    return redirect(route('home'));
   }
}
