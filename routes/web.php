<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

use App\Http\Controllers\TransferController;
use App\Http\Controllers\LocationController;
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


Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts_page');

Route::get('/aboutus',[HomeController::class, 'aboutus'])->name("about_us_page");



Route::middleware('auth')->group(function (){
//*************************** ADMİN PANEL ROUTES ***************************//
//3- Call Controller Function
Route::get('/admin',[AdminHomeController::class, 'index'] )->name('admin');
Route::get('/admin/tables',[AdminHomeController::class, 'tables_getir'])->name('admin_tables');
Route::get('/admin/billing',[AdminHomeController::class, 'billing_getir'])->name('admin_billing');
Route::get('/admin/profile',[AdminHomeController::class, 'profile_getir'])->name('admin_profile');
Route::get('/admin/location',[AdminHomeController::class, 'location_getir'])->name('admin_add_location');
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
Route::get('/admin/category/show/{id}',[CategoryController::class, 'show'] )->name('admin_category_show');
Route::get('/admin/category/delete/{id}',[CategoryController::class, 'destroy'] )->name('admin_category_delete');

//*****************************LOCATION CONTROLLER ROUTE************************
Route::get('/admin/location',[LocationController::class, 'admin_location'] )->name('admin_location');
Route::get('/admin/location/create',[LocationController::class, 'admin_location_create'] )->name('admin_location_create');
Route::post('/admin/location/store',[LocationController::class, 'admin_location_store'] )->name('admin_location_store');
Route::get('/admin/location/show/{id}',[LocationController::class, 'admin_location_show'] )->name('admin_location_show');
Route::get('/admin/location/edit/{id}',[LocationController::class, 'admin_location_edit'] )->name('admin_location_edit');
Route::post('/admin/location/update/{id}',[LocationController::class, 'admin_location_update'] )->name('admin_location_update');
Route::get('/admin/location/delete/{id}',[LocationController::class, 'admin_location_delete'] )->name('admin_location_delete');


//*************************TRANSFER CONTROLLER ROUTE ******************************/

Route::get('/admin/transfer',[TransferController::class, 'admin_transfer'] )->name('admin_transfer');
Route::get('/admin/transfer/create',[TransferController::class, 'admin_transfer_create'] )->name('admin_transfer_create');
Route::post('/admin/transfer/store',[TransferController::class, 'admin_transfer_store'] )->name('admin_transfer_store');
Route::get('/admin/transfer/show/{id}',[TransferController::class, 'admin_transfer_show'] )->name('admin_transfer_show');
Route::get('/admin/transfer/edit/{id}',[TransferController::class, 'admin_transfer_edit'] )->name('admin_transfer_edit');
Route::post('/admin/transfer/update/{id}',[TransferController::class, 'admin_transfer_update'] )->name('admin_transfer_update');
Route::get('/admin/transfer/delete/{id}',[TransferController::class, 'admin_transfer_delete'] )->name('admin_transfer_delete');





});
