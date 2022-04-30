<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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
//1- Do something in route



Route::get('/hello', function () {
    return 'Hello World';
});

//2- Call view in Route
Route::get('/welcome', function () {

//4- Route->Controller->View
Route::get('/test', [HomeController::class, 'test'])->name('test');

//5- Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
    return view('welcome');
});
//3- Call Controller Function
Route::get('/',[HomeController::class, 'index'] )->name('home');
Route::get('/anasayfa',[AdminHomeController::class, 'getir'])->name("dash_cagir");
Route::get('/category',[AdminHomeController::class, 'category_getir'])->name("cate_getir");







//*************************** ADMİN PANEL ROUTES ***************************//
//3- Call Controller Function
Route::get('/admin',[AdminHomeController::class, 'index'] )->name('admin');

