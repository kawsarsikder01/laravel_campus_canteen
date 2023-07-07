<?php

namespace App\Http\Controllers;

use App\Models\AppConfig;
use Illuminate\Http\Request;
use Auth;

class AppConfigController extends Controller
{


    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset(Auth::user()->username)){
            $app_datas = AppConfig::All();
            return view('admin.app_config_data',['app_datas'=> $app_datas]);
        }
        return redirect(route('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Create" || trim($userPermission->name) == "create"){
                return view('admin.app_config');
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Create" || trim($userPermission->name) == "create"){
                if($request->logo != null && $request->text_logo == null || $request->logo == null && $request->text_logo != null ){
                if($request->logo == null){
                    $request->validate(['text_logo'=>'required']);
                }else{
                    $request->validate(['logo'=>'required']);
                }
                $request->validate([
                    'app_name'=>'required',
                    'company_name'=>'required',
                    'phone'=>'required',
                    'email'=>'required',
                    'address'=>'required',
                    'business_address'=>'required',
                    'invoice_header'=>'required',
                    'invoice_footer'=>'required'
                   ]);
                   //invoice header image
                   $invoice_header = $request->file('invoice_header');
                    $invoice_headername = $invoice_header->getClientOriginalName();
                    $request->invoice_header->move(public_path('appconfig'),$invoice_headername);
                    //invoice footer image
                    $invoice_footer = $request->file('invoice_footer');
                    $invoice_footername = $invoice_footer->getClientOriginalName();
                    $request->invoice_footer->move(public_path('appconfig'),$invoice_footername);

                $appconfig = new AppConfig();
                $appconfig->app_name = $request->app_name;
                $appconfig->company_name = $request->company_name;
                $appconfig->phone = $request->phone;
                $appconfig->email = $request->email;
                $appconfig->address = $request->address;
                $appconfig->business_address = $request->business_address;
                $appconfig->invoice_header = $invoice_headername;
                $appconfig->footer_header = $invoice_footername;
                if($request->logo != null){
                    $logo = $request->file('logo');
                    $logoname = $logo->getClientOriginalName();
                    $request->logo->move(public_path('appconfig'),$logoname);
                    $appconfig->logo = $logoname;
                   }
                   $appconfig->logo_text = $request->text_logo;

                   $appconfig->save();
                   return redirect(route('appdata'));
                }
                else{ return redirect(route('appconfig'));}
            }
        }
        return redirect(route('dashboard'));
       
    }

    /**
     * Display the specified resource.
     */
    public function show(AppConfig $appConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppConfig $appConfig ,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                $appConfig = AppConfig::where('id',$id)->first();
        return view('admin.edit_config_data',['appConfig'=>$appConfig]);
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AppConfig $appConfig,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Edit" || trim($userPermission->name) == "edit"){
                if($request->logo != null && $request->text_logo == null || $request->logo == null && $request->text_logo != null ){
                    if($request->logo == null){
                        $request->validate(['text_logo'=>'required']);
                    }else{
                        $request->validate(['logo'=>'required']);
                    }
                    $request->validate([
                        'app_name'=>'required',
                        'company_name'=>'required',
                        'phone'=>'required',
                        'email'=>'required',
                        'address'=>'required',
                        'business_address'=>'required',
                        
                       ]);
                      
                    $appconfig = AppConfig::where('id',$id)->first();
                    $appconfig->app_name = $request->app_name;
                    $appconfig->company_name = $request->company_name;
                    $appconfig->phone = $request->phone;
                    $appconfig->email = $request->email;
                    $appconfig->address = $request->address;
                    $appconfig->business_address = $request->business_address;
                    //invoice header image
                    if($request->invoice_header != null){
                        $invoice_header = $request->file('invoice_header');
                        $invoice_headername = $invoice_header->getClientOriginalName();
                        $request->invoice_header->move(public_path('appconfig'),$invoice_headername);
                        $appconfig->invoice_header = $invoice_headername;
                   }
               //invoice footer image
               if($request->invoice_footer != null){
                    $invoice_footer = $request->file('invoice_footer');
                    $invoice_footername = $invoice_footer->getClientOriginalName();
                    $request->invoice_footer->move(public_path('appconfig'),$invoice_footername);
                    $appconfig->footer_header = $invoice_footername;
               }
                if($request->logo != null){
                    $logo = $request->file('logo');
                    $logoname = $logo->getClientOriginalName();
                    $request->logo->move(public_path('appconfig'),$logoname);
                    $appconfig->logo = $logoname;
                   }
                   
                   
                   else{ $appconfig->logo_text = $request->text_logo;}
                  

                   $appconfig->save();
                   return redirect(route('appdata'));

                }else{return redirect(route('edit_config'));}
            }
        }
        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppConfig $appConfig,$id)
    {
        $userPermissions = Auth::user()->permissions;
        foreach($userPermissions as $userPermission){
            if(trim($userPermission->name) == "Delete" || trim($userPermission->name) == "delete"){
                $appConfig = AppConfig::where('id',$id)->first();
                $appConfig->delete();
                return redirect(route('appdata'));
            }
        }
        return redirect(route('dashboard'));
    }
}
