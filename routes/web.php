<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AddCustomer;
use App\Http\Controllers\Customer;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Products;
use App\Http\Controllers\Outdoors;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Setting;
use App\Http\Controllers\AppConfig;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('index');
})->name('index');
Route::post('/added_customer',[AddCustomer::class ,'store'])->name('customercontroller');
Route::post('customer/{id}/update',[Customer::class ,'update']);
Route::get('customer/{id}/delete',[Customer::class ,'destroy']);
Route::post('categorie/{id}/update',[Categories::class , 'update']);
Route::get('categorie/{id}/delete',[Categories::class , 'destroy']);
Route::get('home',function(){
    return view('frontend.index');
})->name('home');
Route::get('user_login',function(){
    return view('frontend.login');
})->name('userlogin');
Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[Authentication::class ,'logout'])->name('logout');
    Route::get('/dashboard',[Dashboard::class ,'index'])->name('dashboard');
    Route::get('/add_customer',[AddCustomer::class ,'index'])->name('addcustomer');
    Route::get('/customers',[AddCustomer::class ,'index2'])->name('customers');
    Route::get('add_category',[Categories::class ,'index'])->name('addcategory');
Route::get('categories',[Categories::class ,'index2'])->name('categories');
Route::get('add_product',[Products::class ,'index'])->name('addproduct');
Route::get('products',[Products::class ,'index2'])->name('products');
Route::get('add_outdoor',[Outdoors::class ,'index'])->name('addoutdoor');
Route::get('outdoors',[Outdoors::class ,'index2'])->name('outdoors');
Route::get('add_order',[Orders::class ,'index'])->name('addorder');
Route::get('orders',[Orders::class ,'index2'])->name('orders');
Route::get('add_user',[Setting::class ,'index'])->name('adduser');
Route::get('users',[Setting::class ,'index2'])->name('users');
Route::get('user_role',[Setting::class ,'index3'])->name('userrole');
Route::get('permissions',[Setting::class ,'index4'])->name('permissions');
Route::get('app_config',[AppConfig::class ,'index'])->name('appconfig');
Route::get('slider',[AppConfig::class ,'index2'])->name('slider');
Route::get('privecy_policy',[AppConfig::class ,'index3'])->name('privecy');
Route::get('about_page',[AppConfig::class ,'index4'])->name('about');
Route::get('customer/{id}/edit',[Customer::class ,'edit']);
Route::get('customer/{id}/delete',[Customer::class ,'destroy']);
Route::get('customer/{id}/view',[Customer::class ,'view']);
Route::post('create_user',[UserController::class,'createUser'])->name('createUser');
Route::post('create_categorie/{id}',[Categories::class,'store'])->name('create_categorie');
Route::get('category/{id}/edit',[Categories::class , 'edit']);
Route::get('user/{id}/profile',[UserController::class,'show']);
Route::post('add_product/{id}',[Products::class ,'store']);

});

Route::get('resistration',function(){
    return view('resistration');
})->name('resistration');
Route::post('userdatastore',[Authentication::class ,'store'])->name('user');
Route::get('login',[Authentication::class ,'index'])->name('login');
Route::post('login',[Authentication::class ,'auth'])->name('login');



