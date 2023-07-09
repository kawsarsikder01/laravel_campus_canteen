<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class FrontendAboutController extends Controller
{
    public function index()
    {
        $about = About::All();
        return view('frontend.about',['about'=>$about]);
    }
}
