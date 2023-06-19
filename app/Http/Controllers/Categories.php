<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categories extends Controller
{
    public function index()
   {
    return view('admin.add_category');
   }
   public function index2()
   {
    return view('admin.categories');
   }
}
