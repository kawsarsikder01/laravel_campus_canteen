<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class Customers extends Controller
{
    public function index()
    {
        return view('admin.customers',['customers' => $customers]);
    }
}
