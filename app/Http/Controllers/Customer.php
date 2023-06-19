<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class Customer extends Controller
{
    public function edit($id)
    {
        $customer = Customers::where('id',$id)->first();
        return view('admin.edit_customer',['customer'=>$customer]);
    }
    public function update(Request $req ,$id)
    {
        $req->validate([
            'name' => 'required',
            'username' => 'required',
            'image' => 'required'|'nullable',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'passwoard' => 'required'
        ]);
        $customer = Customers::where('id',$id)->first();
        if(isset($req->image)){
            $imageName = time().'_'.$req->image->extension();
        $req->image->move(public_path('image'),$imageName);
        $customer->image=$imageName;
        }
        
        $customer->name=$req->name;
        $customer->username=$req->username;
        $customer->address=$req->address;
        $customer->phone=$req->phone;
        $customer->email=$req->email;
        $customer->passwoard=$req->passwoard;
        $customer->save();


        return redirect(route('customers'));
    
    }
    public function destroy($id)
    {
        $customer = Customers::where('id',$id)->first();
        $customer->delete();
        return redirect(route('customers'));
    }
}
