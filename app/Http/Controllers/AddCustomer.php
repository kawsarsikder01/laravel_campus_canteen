<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

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
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'username' => 'required',
            'image' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'passwoard' => 'required'
        ]);
        $imageName = time().'_'.$req->image->extension();
        $req->image->move(public_path('image'),$imageName);
        
        $customer = new Customers;
        $customer->name=$req->name;
        $customer->username=$req->username;
        $customer->image=$imageName;
        $customer->address=$req->address;
        $customer->phone=$req->phone;
        $customer->email=$req->email;
        $customer->passwoard=$req->passwoard;
        $customer->save();


        return redirect(route('customers'));
    }
}
