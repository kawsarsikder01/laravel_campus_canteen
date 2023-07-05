<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;
use Auth;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacys = Privacy::All();
        return view('admin.privacy_policy',['privacys'=>$privacys]);
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
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Create" || trim($userPermission->name) == "create"){
                $request->validate([
                    'heading'=>'required',
                    'content'=>'required'
                ]);
                $image = $request->file('image');
                $imagename = $image->getClientOriginalName();
                $request->image->move(public_path('image'),$imagename);
                $privacy = new Privacy();
                $privacy->heading = $request->heading;
                $privacy->content = $request->content;
                $privacy->image = $imagename;
                $privacy->save();
                return redirect(route('privecy'));
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Privacy $privacy,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                $privacy = Privacy::where('id',$id)->first();
                return view('admin.edit_privacy',['privacy'=>$privacy]);
                
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Privacy $privacy ,$id)
    {
       
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                $request->validate([
                    'heading'=>'required',
                    'content'=>'required',
                ]);

                $privacy = Privacy::where('id',$id)->first();
                $privacy->heading = $request->heading;
                $privacy->content = $request->content;
                if($request->image != null){
                    $image = $request->file('image');
                    $imagename = $image->getClientOriginalName();
                    $request->image->move(public_path('image'),$imagename);
                    $privacy->image = $imagename;
                } 
                // dd('nice');
                $privacy->save();
                return redirect(route('privecy'));
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Privacy $privacy,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Delete" || trim($userPermission->name) == "delete"){
                $privacy = Privacy::where('id',$id)->first();
                $privacy->delete();
                return redirect(route('privecy'));
            }
        }
        return redirect(route('dashboard'));
    }
}
