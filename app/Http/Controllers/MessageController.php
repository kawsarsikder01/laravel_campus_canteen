<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Product;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.message');
    }
    public function getdata()
    {
        $messages = Message::All();
        return response()->json($messages,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $product = Product::All();
        // return response()->json($product,200);
        // $data = new Message();
       $data = Message::create($request->all());
       $messages = Message::All();
       return response()->json($messages,200);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message,$id)
    {
        $customer = Message::where('id',$id)->first();
        $customer->delete();
        $customers = Message::All();
        return response()->json($customers,200);
    }
}
