<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class Categories extends Controller
{
    public function index()
   {
    return view('admin.add_category');
   }
   public function index2()
   {
    $categories = Categorie::All();
    return view('admin.categories',['categories'=>$categories]);
   }

   public function store(Request $request)
   {
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
     $categorie->save();
     return redirect(route('categories'));

   }
   public function edit($id)
   {
    $categorie = Categorie::where('id',$id)->first();
    return view('admin.edit_categorie',['categorie'=>$categorie]);
   }
   public function update(Request $request,$id)
   {
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
   public function destroy($id)
   {
    
    $categorie = Categorie::where('id',$id)->first();
    
    $categorie->delete();
    
    return redirect(route('categories'));
   }
}
