<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Auth;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
               
            $roles = Role::All();
            return view('admin.user_role',['roles'=>$roles]);
           
            }
        }
        return redirect(route('dashboard'));
            
          
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                return view('admin.add_user_role');
           
            }
        }
        return redirect(route('dashboard'));
      
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                $request->validate([
                    'role_name' => 'required|max:255',
                    'role_slug' => 'required|max:255'
                ]);
                $role = new Role();
                $role->name = $request->role_name;
                $role->slug = $request->role_slug;
                $role-> save();
               
                $listOfPermissions = explode(',', $request->roles_permissions);//create array from separated/coma permissions
                
                foreach ($listOfPermissions as $permission) {
                    $permissions = new Permission();
                    $permissions->name = $permission;
                    $permissions->slug = strtolower(str_replace(" ", "-", $permission));
                    $permissions->save();
                    $role->permissions()->attach($permissions->id);
                    $role->save();
                }    
                return redirect(route('userrole'));
           
            }else{
                return redirect(route('dashboard'));
            }
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                
           
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                $role = Role::where('id',$id)->first();
                // dd($role->name);
                return view('admin.edit_role',['role'=>$role]);
           
            }
        }
        return redirect(route('dashboard'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Setting" || trim($userPermission->name) == "setting"){
                $role = Role::where('id',$id)->first();
        $role->name = $request->role_name;
        $role->slug = $request->role_slug;
        $role->save();
        $role->permissions()->delete();
        $role->permissions()->detach();
        $listOfPermissions = explode(',', $request->roles_permissions);//create array from separated/coma permissions
        
        foreach ($listOfPermissions as $permission) {
            $permissions = new Permission();
            $permissions->name = $permission;
            $permissions->slug = strtolower(str_replace(" ", "-", $permission));
            $permissions->save();
            $role->permissions()->attach($permissions->id);
            $role->save();
        }    
        return redirect(route('userrole'));
           
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}


