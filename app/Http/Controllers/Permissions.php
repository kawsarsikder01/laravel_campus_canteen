<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class Permissions extends Controller
{
    public function store(Request $request)
    {
       $permission = new Permission;
       $permission->user_id = $request->user_id;
       $permission->role_id = $request->role_id;
       $permission->save();
      return redirect(route('userrole'));

    }
}
