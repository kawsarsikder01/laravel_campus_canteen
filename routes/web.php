<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AddCustomer;
use App\Http\Controllers\Customers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard',[Dashboard::class ,'index'])->name('dashboard');
Route::get('/add_customer',[AddCustomer::class ,'index'])->name('addcustomer');
Route::get('/customers',[AddCustomer::class ,'index2'])->name('customers');
Route::post('/added_customer',[AddCustomer::class ,'store'])->name('customercontroller');
