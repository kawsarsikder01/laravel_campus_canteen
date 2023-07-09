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
        return view('admin.customers',['customers' => $customers]);
    }
    public function store(Request $request)
    {
       $data = new Customers();
       $data->name = $request->input('name');
       $data->email = $request->input('email');
       $data->phone_no = $request->input('phone');
       $data->address = $request->input('address');
       $data->save();
    }
}
