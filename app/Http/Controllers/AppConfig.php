<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppConfig extends Controller
{
    public function index()
    {
     return view('admin.app_config');
    }
    public function index2()
    {
     return view('admin.slider');
    }
    public function index3()
    {
     return view('admin.privacy_policy');
    }
    public function index4()
    {
     return view('admin.about');
    }
}
