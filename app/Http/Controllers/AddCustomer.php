<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Auth;

class AddCustomer extends Controller
{
    public function index()
    {
        
        return view('admin.add_customer');
    }
    public function index2()
    {
        $customers = Customers::All();
        return response()->json($customers,200);
    }
    public function store(Request $request)
    {
       $customers = Customers::create($request->all());
       $customer = Customers::All();
       return response()->json($customer,200);
    }
}
