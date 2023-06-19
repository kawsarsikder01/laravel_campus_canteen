<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Outdoors extends Controller
{
    public function index()
    {
     return view('admin.add_outdooor');
    }
    public function index2()
    {
     return view('admin.outdoors');
    }
}
