<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;
use Auth;



class Products extends Controller
{
    public function index()
   {
    if(isset(Auth::user()->username)){
        $categories =  Categorie::all();
        return view('admin.add_product',compact('categories'));
    }
    return redirect(route('home'));
   }
   public function index2()
   {
    if(isset(Auth::user()->username)){
        $products = Product::All();
        return view('admin.products',compact('products'));
    }
    return redirect(route('home'));
   }
   public function store(Request $request,$id)
   {
    if(isset(Auth::user()->username)){
        $permissions = Auth::user()->permissions;

        foreach ($permissions as $permission){
        if (trim($permission->name) == "Create" || trim($permission->name) == "create"){}
        $categorie = Categorie::find($request->categorie_id);
        $request->validate([
            'name'=>'required',
            'categorie_id'=>'required',
            'description'=>'required',
            'cost_price'=>'required',
            'sell_price'=>'required',
            'image'=>'required',
        ]);
        $imagename = time().'_'.$request->image->extension();
        $request->image->move(public_path('image'),$imagename);
        $user = User::find($id);
        // $categorie = Categorie::where('id',$request->categorie_id)->first();
        // $categorie = Categorie::when('id',$request->categorie_id)->first();
        $category_name = $categorie->name;
        $product = new Product;
        $product->name = $request->name;
        $product->category_name = $categorie->name;
        $product->category_id = $request->categorie_id;
        $product->cost_price = $request->cost_price;
        $product->sell_price = $request->sell_price;
        $product->description = $request->description;
        $product->image = $imagename;
        $product->user_id =  $user->id;
        if(isset($request->esale)){
            $product->esale = 1;
        }
        if(isset($request->outdoor)){
            $product->outdoor = 1;
        }
        $categorie->products()->save($product);
       return redirect(route('products'));
    
        }
        return redirect(route('dashboard'));
    }
    return redirect(route('home'));
    
    

   }
}
