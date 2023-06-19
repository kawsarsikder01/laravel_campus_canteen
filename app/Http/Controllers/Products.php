<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function index()
   {
    return view('admin.add_product');
   }
   public function index2()
   {
    return view('admin.products');
   }
}
