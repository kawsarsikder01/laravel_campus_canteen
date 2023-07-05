<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;



class Products extends Controller
{
    public function index()
   {
    $categories =  Categorie::all();
    // dd($categories->name);
    return view('admin.add_product',compact('categories'));
   }
   public function index2()
   {
    $products = Product::All();
    return view('admin.products',compact('products'));
   }
   public function store(Request $request,$id)
   {
    $products = Product::find(1);
    // $products = Categorie::find(1)->products;
    dd($products->categories());
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
        $cid = $request->categorie_id;
        $categorie = Categorie::where('id',$cid)->first();
        // $categorie = Categorie::when('id',$request->categorie_id)->first();
        $category_name = $categorie->name;
        // dd($category_name);
        $product = new Product;
        $product->name = $request->name;
        $product->category_name = $category_name;
        // $product->category_id = $request->categorie_id;
        $product->cost_price = $request->cost_price;
        $product->sell_price = $request->sell_price;
        $product->description = $request->description;
        $product->image = $imagename;
        $product->categories()->attach($$request->categorie_id);
        $user->product()->save($product);
       return redirect(route('products'));

   }
}
