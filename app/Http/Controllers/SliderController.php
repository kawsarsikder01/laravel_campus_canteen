<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        if(isset(Auth::user()->username)){
        $sliders = Slider::All();
        return view('admin.slider',['sliders'=>$sliders]);
    }
    return redirect(route('home'));
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
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Create" || trim($userPermission->name) == "create"){
                    $request->validate([
                        'heading'=>'required',
                        'content'=>'required',
                        'image'=>'required'
                    ]);
                    $image = $request->file('image');
                    $imagename = $image->getClientOriginalName();
                    $request->image->move(public_path('image'),$imagename);
    
                    $slide = new Slider();
                    $slide->heading = $request->heading;
                    $slide->content = $request->content;
                    $slide->image = $imagename;
                   
                    $sliders = Slider::All();
                    foreach($sliders as $slider){
                        if($slider->status == 1 && $request->status != null || $request->status == null){
                           $slide->status = 0;
                        }
                    }
                    // dd('nice');
                    $slide->save();
                    return redirect(route('slider'));
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
        // dd($request->status);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider,$id)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Create" || trim($userPermission->name) == "create"){
                    $slider = Slider::where('id',$id)->first();
                    return view('admin.edit_slider',['slider'=>$slider]);
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider,$id)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                    $request->validate([
                        'heading'=>'required',
                        'content'=>'required',
                    ]);
    
                    $slide = Slider::where('id',$id)->first();
                    $slide->heading = $request->heading;
                    $slide->content = $request->content;
                    if($request->image != null){
                        $image = $request->file('image');
                        $imagename = $image->getClientOriginalName();
                        $request->image->move(public_path('image'),$imagename);
                        $slide->image = $imagename;
                    }
                    $sliders = Slider::All();
                    foreach($sliders as $slider){
                        if($slider->status == 1 && $request->status != null){
                           $slide->status = 0;
                        }else{
                            $slide->status = 1;
                        }
                    }
                    // dd('nice');
                    $slide->save();
                    return redirect(route('slider'));
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider,$id)
    {
        if(isset(Auth::user()->username)){
            $userPermissions = Auth::user()->permissions;
            foreach($userPermissions as $userPermission){
                if(trim($userPermission->name) == "Delete" || trim($userPermission->name) == "delete"){
                    $slider = Slider::where('id',$id)->first();
                    $slider->delete();
                    return redirect(route('slider'));
                }
            }
            return redirect(route('dashboard'));
        }
        return redirect(route('home'));
    }
}
