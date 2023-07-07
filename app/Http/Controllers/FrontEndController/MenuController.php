<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
   public function index()
   {
        return view('frontend.menu');
   }
}
