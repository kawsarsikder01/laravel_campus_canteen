<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DrinkController extends Controller
{
   public function index()
   {
      $products = Product::All();
    return view('frontend.drink',['products'=>$products]);
   }
}
