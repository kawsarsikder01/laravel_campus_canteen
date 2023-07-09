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
use App\Http\Controllers\AppConfigController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Roles;
use App\Http\Controllers\Permissions;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FrontEndController\HomePageController;
use App\Http\Controllers\FrontEndController\MenuController;
use App\Http\Controllers\FrontEndController\CategorieController;
use App\Http\Controllers\FrontEndController\BakeryController;
use App\Http\Controllers\FrontEndController\FastFoodController;
use App\Http\Controllers\FrontEndController\DrinkController;
use App\Http\Controllers\FrontEndController\FrontendAboutController;
use App\Http\Controllers\MessageController;




//Frontendt Route


Route::get('/', [HomePageController::class,'index'])->name('home');//Home section Route

Route::get('menu',[MenuController::class ,'index'])->name('menu');//menu Section Route


Route::get('categorie',[CategorieController::class ,'index'])->name('front_categorie');//Categorie Route

Route::get('bakery',[BakeryController::class ,'index'])->name('bakery');//Bakery Route


Route::get('fastfood',[FastFoodController::class ,'index'])->name('fastfood');//fast food route

Route::get('drinks',[DrinkController::class , 'index'])->name('drinks');//Drink Route

Route::get('app_about',[FrontendAboutController::class ,'index'])->name('app_about');//About Route

Route::get('user_login',function(){
    return view('frontend.login');
})->name('userlogin');
Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');
Route::get('registration',function(){
    return view('frontend.registration');
})->name('registration');

//Customer Message Route
Route::post('send_message',[MessageController::class ,'store']);

//Admin Panel Route

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[Authentication::class ,'logout'])->name('logout');
    Route::get('/dashboard',[Dashboard::class ,'index'])->name('dashboard');
    Route::get('/add_customer',[AddCustomer::class ,'index'])->name('addcustomer');
    Route::get('/customers',[AddCustomer::class ,'index2'])->name('customers');
Route::get('add_product',[Products::class ,'index'])->name('addproduct');
Route::get('products',[Products::class ,'index2'])->name('products');
Route::get('add_outdoor',[Outdoors::class ,'index'])->name('addoutdoor');
Route::get('outdoors',[Outdoors::class ,'index2'])->name('outdoors');
Route::get('add_order',[Orders::class ,'index'])->name('addorder');
Route::get('orders',[Orders::class ,'index2'])->name('orders');
// Route::get('user_role',[Setting::class ,'index3'])->name('userrole');
Route::get('permissions',[Setting::class ,'index4'])->name('permissions');
Route::get('customer/{id}/edit',[Customer::class ,'edit']);
Route::get('customer/{id}/delete',[Customer::class ,'destroy']);
Route::get('customer/{id}/view',[Customer::class ,'view']);
Route::post('add_product/{id}',[Products::class ,'store']);
Route::post('user_permission',[Permissions::class,'store'])->name('user_permission');
Route::get('home', function () {
    return view('frontend.index');
})->name('frontend_home');
// Route::get('add_role',[Roles::class,'index'])->name('addrole');
// Route::get('permission',[Permissions::class,'index'])->name('permission');
// Route::post('create_role',[Roles::class,'store'])->name('createrole');


//Roles Route

Route::get('user_role',[RolesController::class ,'index'])->name('userrole');
Route::get('create_role',[RolesController::class ,'create'])->name('create_role');
Route::post('create/{id}/role',[RolesController::class ,'store']);
Route::get('role/{id}/edit',[RolesController::class ,'edit']);
Route::post('update/{id}/role',[RolesController::class ,'update']);

//User Routes
Route::get('/add_user',[UserController::class ,'create'])->name('adduser');
Route::get('user/{id}/profile',[UserController::class,'show']);
Route::get('user/{id}/edit',[UserController::class,'edit']);
Route::post('user/{id}/update',[UserController::class,'update'])->name('userupdate');
Route::get('users',[Setting::class ,'index2'])->name('users');
Route::post('create_user',[UserController::class,'createUser'])->name('createUser');

//App Config Route
Route::get('app_config',[AppConfigController::class ,'create'])->name('appconfig');
Route::get('app_data',[AppConfigController::class ,'index'])->name('appdata');
Route::post('add_app_data',[AppConfigController::class,'store'])->name('add_app_data');
Route::get('config/{id}/edit',[AppConfigController::class,'edit'])->name('edit_config');
Route::post('config/{id}/update',[AppConfigController::class,'update'])->name('update_config');
Route::get('config/{id}/delete',[AppConfigController::class,'destroy'])->name('delete_config');

//Categorie Section
Route::post('create_categorie/{id}',[Categories::class,'store'])->name('create_categorie');
Route::get('category/{id}/edit',[Categories::class , 'edit']);
Route::get('add_category',[Categories::class ,'index'])->name('addcategory');
Route::get('categories',[Categories::class ,'index2'])->name('categories');
Route::post('categorie/{id}/update',[Categories::class , 'update']);
Route::get('categorie/{id}/delete',[Categories::class , 'destroy']);

//Slider Route
Route::get('slider',[SliderController::class ,'index'])->name('slider');
Route::post('add_slider',[SliderController::class ,'store'])->name('add_slider');
Route::get('slider/{id}/edit',[SliderController::class ,'edit']);
Route::post('slider/{id}/update',[SliderController::class ,'update']);
Route::get('slider/{id}/delete',[SliderController::class ,'destroy']);

//Privacy page route

Route::get('privecy_policy',[PrivacyController::class ,'index'])->name('privecy');
Route::post('add_policy',[PrivacyController::class ,'store'])->name('add_policy');
Route::get('privacy/{id}/edit',[PrivacyController::class ,'edit']);
Route::post('privacy/{id}/update',[PrivacyController::class ,'update']);
Route::get('privacy/{id}/delete',[PrivacyController::class ,'destroy']);

//About page route
Route::get('about_page',[AboutController::class ,'index'])->name('about');
Route::post('add_about',[AboutController::class ,'store'])->name('add_about');
Route::get('about/{id}/edit',[AboutController::class , 'edit']);
Route::post('about/{id}/update',[AboutController::class ,'update']);
Route::get('about/{id}/delete',[AboutController::class,'destroy']);

//Customer Route 
Route::post('added_customer',[AddCustomer::class ,'store']);
Route::post('customer/{id}/update',[Customer::class ,'update']);
Route::get('customer/{id}/delete',[Customer::class ,'destroy']);



























});

// Route::get('resistration',function(){
//     return view('resistration');
// })->name('resistration');
Route::post('userdatastore',[Authentication::class ,'store'])->name('user');
Route::get('login',[Authentication::class ,'index'])->name('login');
Route::post('login',[Authentication::class ,'auth'])->name('user_login');



