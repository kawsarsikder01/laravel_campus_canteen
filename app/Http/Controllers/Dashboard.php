<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Dashboard extends Controller
{
   public function index()
   {
      if(isset(Auth::user()->username)){
         return view('admin.dashboard');
      }
      return redirect(route('home'));
   }
}
