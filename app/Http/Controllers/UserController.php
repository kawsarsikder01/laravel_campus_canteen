<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userprofile;

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
        $imageName = time().'_'.$req->image;
        // $req->image->move(public_path('image'),$imageName);
        // dd($imageName);
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->save();

        $profile = new Userprofile;
        $profile->name = $req->name;
        $profile->age = $req->age;
        $profile->image =  $imageName;
        $profile->dob = $req->dob;
        $profile->address = $req->address;
        $profile->email = $req->email;
        $profile->username = $req->username;
        $profile->phone = $req->phone;
        $profile->password = $req->password;
        $user->userprofile()->save($profile);
        return redirect(route('users'));
        
    }
    public function show($id)
    {
        $profile = Userprofile::where('user_id',$id)->first();
        if($profile == null){
            return redirect(route('users'));
        }
        else{
            return view('admin.user_profile',compact('profile'));
        }
    }
}
