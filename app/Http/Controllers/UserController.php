<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Userprofile;
use Auth;

class UserController extends Controller
{
    public function getpermission($id){
        
        $roles = Role::where('id',$id)->first();
        $permissions = $roles->permissions;

        return $permissions;
   
}

    public function create(Request $request)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                // var_dump(trim($userPermission->name));
                if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                    $roles = Role::All();
                    return view('admin.add_user',['roles'=>$roles]);
                }
              
            }
            return redirect(route('dashboard'));
           
        }
        return redirect(route('home'));

    }

    public function createUser(Request $req)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                    $req->validate([
                        'name'=>'required',
                        'email'=>'required ',
                        'username'=>'required',
                        'phone'=>'required',
                        'password'=>'required|confirmed|min:6'
                    ]);
                    $image = $req->file('image');
                    
                    $imagename = $image->getClientOriginalName();
                   
                    $req->image->move(public_path('image'),$imagename);
                    
                    $user = new User;
                    $user->name = $req->name;
                    $user->email = $req->email;
                    $user->password = $req->password;
                    $user->username = $req->username;
                    $user->phone = $req->phone;
                    $user->address = $req->address;
                    $user->image = $imagename;
                    $user->save();
            
                    if($req->role != null){
                        $user->roles()->attach($req->role);
                        $user->save();
                    }
                    if($req->permissions != null){            
                        foreach ($req->permissions as $permission) {
                            $user->permissions()->attach($permission);
                            $user->save();
                        }
                    }
            
                    $profile = new Userprofile;
                    $profile->name = $req->name;
                    $profile->age = $req->age;
                    $profile->image =  $imagename;
                    $profile->dob = $req->dob;
                    $profile->address = $req->address;
                    $profile->email = $req->email;
                    $profile->username = $req->username;
                    $profile->phone = $req->phone;
                    $profile->password = $req->password;
                    $user->userprofile()->save($profile);
                    return redirect(route('users'));
                    
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
        
        
    }
    public function edit($id)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                    $user = Userprofile::where('user_id',$id)->first();
                    $roles = Role::All();
                    return view('admin.user_edit',['roles'=>$roles],['user'=>$user]);
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
        
    }
    public function Update(Request $request,$id)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                    if($request->image != null){
                        $image = $request->file('image');
                    
                    $imagename = $image->getClientOriginalName();
                   
                    $request->image->move(public_path('image'),$imagename);
                    }
                    $user = User::where('id',$id)->first();
                    // dd($id);
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->username = $request->username;
                    $user->address = $request->address;
                    if($request->image != null){
                        $user->image = $imagename;
                    }
                    else{
                        $user->image = $request->himage;
                    }
                    
                    $user->phone = $request->phone;
                    $user->phone = $request->phone;
                    $user->save();
                    $user->roles()->detach();
                    $user->permissions()->detach();
                    if($request->role != null){
                        $user->roles()->attach($request->role);
                        $user->save();
                    }
                    if($request->permissions != null){            
                        foreach ($request->permissions as $permission) {
                            $user->permissions()->attach($permission);
                            $user->save();
                        }
                    }
                    $userProfile = Userprofile::where('user_id',$id)->first();
                    $userProfile->name =$request->name;
                    $userProfile->email = $request->email;
                    $userProfile->username = $request->username;
                    $userProfile->address = $request->address;
                    $userProfile->phone = $request->phone;
                    if($request->image != null){
                        $userProfile->image = $imagename;
                    }
                    else{
                        $user->image = $request->himage;
                    }
                    $userProfile->dob = $request->dob;
                    $userProfile->age = $request->age;
                    $user->userprofile()->save($userProfile);
                    return redirect(route('users'));
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
        
       

    }
    public function show($id)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                    $profile = Userprofile::where('user_id',$id)->first();
                    if($profile == null){
                        return redirect(route('users'));
                    }
                    else{
                        return view('admin.user_profile',compact('profile'));
                    }
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
        
       
    }
}
