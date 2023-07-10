<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class Customer extends Controller
{
    public function edit($id)
    {
        $customer = Customers::where('id',$id)->first();
        return response()->json($customer);
    }
    public function update(Request $request ,$id)
    {
        
    
        // Find the model instance to update
        $customer = Customers::find($id);
    
        // Update the model attributes
       $data = [
        'name'=> $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'phone_no' => $request->phone_no
       ];
    
        // Save the changes to the database
        $customer->update($data);
    
        // Return a response if needed
        $customers = Customers::All();
        return response()->json($customers,200);
    
    }
    public function destroy($id)
    {
        $customer = Customers::where('id',$id)->first();
        $customer->delete();
        $customers = Customers::All();
        return response()->json($customers,200);
    }
    public function view($id)
    {
        $customer = Customers::where('id',$id)->first();
        return view('admin.view',['customer'=>$customer]);
    }
}
