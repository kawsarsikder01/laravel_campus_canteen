<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomePageController extends Controller
{
    public function index()
    {
        $products = Product::All();
        return view('frontend.index',['products'=>$products]);
    }
}
