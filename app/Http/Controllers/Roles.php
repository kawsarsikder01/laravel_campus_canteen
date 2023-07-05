<?php

namespace App\Http\Controleers;

use Illuminate\Http\Request;
use App\Models\Role;

class Roles extends Controleer
{
    public function index()
    {
        return view('admin.add_user_role');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'section'=>'required'
        ]);

        $role = new Role;
        $role->name = $request->name;
        $role->section = $request->section;
        if(isset($request->can_view)){
            $role->can_view = $request->can_view;
        }
        if(isset($request->can_create)){
            $role->can_create = $request->can_create;
        }
        if(isset($request->can_edit)){
            $role->can_edit = $request->can_edit;
        }
        if(isset($request->can_delete)){
            $role->can_delete = $request->can_delete;
        }
        $role->save();
        return redirect(route('userrole'));
    }
}
