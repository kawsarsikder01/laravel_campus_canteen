<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_data = About::All();
        return view('admin.about',['about_data'=>$about_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Create" || trim($userPermission->name) == "create"){
                // dd($request->heading);
                $request->validate([
                    'heading'=>'required',
                    'content'=>'required'
                ]);
                // dd('hello');
                $image = $request->file('image');
                $imagename = $image->getClientOriginalName();
                $request->image->move(public_path('image'),$imagename);
                $about = new About();
                $about->heading = $request->heading;
                $about->content = $request->content;
                $about->image = $imagename;
                $about->save();
                return redirect(route('about'));
            }else{
                return redirect(route('dashboard'));
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                $about = About::where('id',$id)->first();
                return view('admin.edit_about',['about'=>$about]);
                
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                $request->validate([
                    'heading'=>'required',
                    'content'=>'required',
                ]);

                $about = About::where('id',$id)->first();
                $about->heading = $request->heading;
                $about->content = $request->content;
                if($request->image != null){
                    $image = $request->file('image');
                    $imagename = $image->getClientOriginalName();
                    $request->image->move(public_path('image'),$imagename);
                    $about->image = $imagename;
                } 
                // dd('nice');
                $about->save();
                return redirect(route('about'));
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Delete" || trim($userPermission->name) == "delete"){
                $about = About::where('id',$id)->first();
                $about->delete();
                return redirect(route('about'));
            }
        }
        return redirect(route('dashboard'));
    }
}
