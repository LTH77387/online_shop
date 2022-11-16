<?php

use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('test',function(){
    return view('layout.bs');
});

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
Route::get('adminHome',[AdminController::class,'adminHome'])->name('adminHome');
Route::get('adminCategory',[AdminController::class,'adminCategory'])->name('adminCategory');
Route::get('addCategroy',[AdminController::class,'addCategory'])->name('addCategory');
Route::get('adminBrand',[AdminController::class,'adminBrand'])->name('adminBrand');
Route::get('addBrand',[AdminController::class,'addBrand'])->name('addBrand');
Route::post('brandAdd',[AdminController::class,'brandAdd'])->name('brandAdd');
Route::post('categoryAdd',[CategoryController::class,'categoryAdd'])->name('categoryAdd');
Route::get('productPage',[AdminController::class,'productPage'])->name('productPage');
Route::get('addProduct',[AdminController::class,'addProduct'])->name('addProduct');
Route::post('productAdd',[AdminController::class,'productAdd'])->name('productAdd');
});
Route::group(['prefix'=>'user','namespace'=>'User'],function(){
    Route::get('user',[UserController::class,'user'])->name('user');
 Route::get('shopNow',[UserController::class,'shopNow'])->name('shopNow');
 Route::get('shopPage',[UserController::class,'shopPage'])->name('shopPage');
Route::get('userOrderPage/{id}',[OrderController::class,'userOrderPage'])->name('userOrderPage');
route::get('aboutUsPage',[UserController::class,'aboutUsPage'])->name('aboutUsPage');

});
