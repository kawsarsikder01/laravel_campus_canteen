<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class BakeryController extends Controller
{
    public function index()
    {
        $products = Product::All();
        return view('frontend.bakery',['products'=>$products]);
    }
}
