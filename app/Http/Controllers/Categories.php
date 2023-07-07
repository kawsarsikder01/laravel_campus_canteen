<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Roll;
use App\Models\Permission;


class Categories extends Controller
{
    public function index()
   {
    if(isset(Auth::user()->username)){
        return view('admin.add_category');
    }
    return redirect(route('home'));
   }
   public function index2()
   {
    if(isset(Auth::user()->username)){
        $categories = Categorie::All();
        return view('admin.categories',['categories'=>$categories]);
    }
    return redirect(route('home'));
   }

   public function store(Request $request,$id)
   {
    if(isset(Auth::user()->username)){
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Create" || trim($userPermission->name) == "create"){
                $user = User::find($id);
                $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'image' =>'required'
                ]);
                 $imageName = time().'_'.$request->image->extension();
                 $request->image->move(public_path('image'),$imageName);
                 $categorie = new Categorie;
                 $categorie->name = $request->name;
                 $categorie->description = $request->description;
                 $categorie->image = $imageName;
                 $user->categorie()->save($categorie);
                 return redirect(route('categories'));
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
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                $categorie = Categorie::where('id',$id)->first();
                return view('admin.edit_categorie',['categorie'=>$categorie]);
            }
        }
        return redirect(route('dashboard'));
    }
    return redirect(route('home'));
   }
   public function update(Request $request,$id)
   {
    if(isset(Auth::user()->username)){
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                $categorie = Categorie::where('id',$id)->first();
    $request->validate([
        'name' => 'required',
        'description' => 'required' 
    ]);
    $categorie->name = $request->name;
    $categorie->description = $request->description;
    if(isset($request->image)){
        $imageName = time().'_'.$request->image->extension();
    $request->image->move(public_path('image'),$imageName);
    $categorie->image = $imageName;
    }
    $categorie->save();
    return redirect(route('categories'));
            }
        }
        return redirect(route('dashboard'));
    }
    return redirect(route('home'));
    
   }
   public function destroy($id)
   {
    if(isset(Auth::user()->username)){
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Delete" || trim($userPermission->name) == "delete"){
                $categorie = Categorie::where('id',$id)->first();
                $categorie->delete();
                return redirect(route('categories'));
            }
        }
        return redirect(route('dashboard'));
    }
    return redirect(route('home'));
    
   }
}
