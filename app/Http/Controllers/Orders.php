<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Orders extends Controller
{
    public function index()
    {
     return view('admin.add_order');
    }
    public function index2()
    {
     return view('admin.orders');
    }
}
