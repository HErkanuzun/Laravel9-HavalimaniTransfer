<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

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
Route::get('/singin',[HomeController::class, 'sing-in-getir'] )->name('singin-getir');


Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts_page');

Route::get('/aboutus',[HomeController::class, 'aboutus'])->name("about_us_page");



Route::middleware('auth')->group(function (){
//*************************** ADMİN PANEL ROUTES ***************************//
//3- Call Controller Function
Route::get('/admin',[AdminHomeController::class, 'index'] )->name('admin');
Route::get('/admin/tables',[AdminHomeController::class, 'tables_getir'])->name('admin_tables');
Route::get('/admin/billing',[AdminHomeController::class, 'billing_getir'])->name('admin_billing');
Route::get('/admin/profile',[AdminHomeController::class, 'profile_getir'])->name('admin_profile');
//additional
Route::get('/singin',[AdminHomeController::class, 'singin_getir'])->name('admin_singin');
Route::get('/singup',[AdminHomeController::class, 'singup_getir'])->name('admin_singup');
Route::get('/profile',[AdminHomeController::class, 'profile_getir'])->name('admin_profile');

//**************************CATEGORY CONTROLLER ROUTE *************************/
Route::get('/admin/category',[CategoryController::class, 'category_getir'] )->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class, 'category_create'] )->name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class, 'category_store'] )->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[CategoryController::class, 'edit'] )->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[CategoryController::class, 'update'] )->name('admin_category_update');
Route::get('/admin/category/show/{id}',[CategoryController::class, 'category_store'] )->name('admin_category_show');
Route::get('/admin/category/delete/{id}',[CategoryController::class, 'destroy'] )->name('admin_category_delete');

//*****************************deneme sayfasi************************
Route::get('/admin/denemecreate',[CategoryController::class, 'category_deneme'] )->name('admin_category_create_deneme');


});
