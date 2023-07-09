<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;

class HomePageController extends Controller
{
    public function index()
    {
        $sliders = Slider::All();
        $products = Product::All();
        return view('frontend.index',['products'=>$products],['sliders'=>$sliders]);
    }
}
