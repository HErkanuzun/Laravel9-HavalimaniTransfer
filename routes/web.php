<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminPanel\UserController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CategoryController;
use App\Models\image;
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
	Route::get('/test', [HomeController::class, 'home_test'])->name('test');
	
	
	//5- Route with post
	Route::post('/save',[HomeController::class,'save'])->name('save');
	
	Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
	return view('welcome');
});
//*************************** BOOKING CONTROLLER ROUTES ***************************//
Route::get('/booking',[BookingController::class,'index'])->name('booking_getir');

//*************************** HOME CONTROLLER ROUTES ***************************//
Route::controller(HomeController::class)->group(function(){
	Route::get('/', 'index' )->name('home');
	Route::get('/contacts',  'contacts')->name('contacts_page');
	Route::get('/aboutus', 'aboutus')->name("about_us_page");
	Route::get('/singlepage', 'single_page')->name("single_page");
	Route::get('/konumhsp',  'home_konumhsp')->name('home_konumhsp');
	Route::get('/faq', 'index')->name('home_faq');	
	Route::get('/test', 'home_test')->name('test');	
});

Route::middleware('auth')->group(function (){
	//*************************** ADMİN PANEL ROUTES ***************************//
	Route::get('/anasayfa',[AdminHomeController::class, 'getir'])->name('dash_cagir');//.ali;miyor
	Route::get('/category',[AdminHomeController::class, 'category_getir'])->name('cate_getir');
	Route::get('/admin',[AdminHomeController::class, 'index'] )->name('admin');
	Route::get('/admin/tables',[AdminHomeController::class, 'tables_getir'])->name('admin_tables');
	Route::get('/admin/billing',[AdminHomeController::class, 'billing_getir'])->name('admin_billing');
	Route::get('/admin/profile',[AdminHomeController::class, 'profile_getir'])->name('admin_profile');
	Route::get('/admin/location',[AdminHomeController::class, 'location_getir'])->name('admin_add_location');
	//additional
	//Route::get('/singin',[AdminHomeController::class, 'singin_getir'])->name('admin_singin');
	//Route::get('/singup',[AdminHomeController::class, 'singup_getir'])->name('admin_singup');
	
	//**************************CATEGORY CONTROLLER ROUTE *************************/
	Route::get('/admin/category',[CategoryController::class, 'admin_category_getir'] )->name('admin_category');
	Route::get('/admin/category/create',[CategoryController::class, 'admin_category_create'] )->name('admin_category_create');
	Route::post('/admin/category/store',[CategoryController::class, 'admin_category_store'] )->name('admin_category_store');
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
	
	
	
	//**************************IMAGE CONTROLLER ROUTE ********************************/
	Route::prefix('admin/image')->name('admin_image')->controller(ImageController::class)->group(function (){

		Route::get('/image-list/{id}', 'admin_image_index' )->name('_index');
		Route::get('/create/{id}', 'admin_image_create' )->name('_create');
		Route::post('/store/{id}', 'admin_image_store' )->name('_store');
		Route::get('/show/{id}', 'admin_image_show' )->name('_show');
		Route::get('/edit/{id}', 'admin_image_edit' )->name('_edit');
		Route::post('/update/{id}', 'admin_image_update' )->name('_update');
		Route::get('/delete/{id}', 'admin_image_delete' )->name('_delete');
	    Route::get('/image-galery','admin_image_galery')->name('_galery');
	});

	Route::prefix('admin/slider')->name('admin_slider')->controller(ImageController::class)->group(function (){

		Route::get('/index', 'admin_slider_index' )->name('_index');
		Route::get('/create', 'admin_slider_create' )->name('_create');
		Route::post('/store', 'admin_slider_store' )->name('_store');
		Route::get('/show/{id}', 'admin_slider_show' )->name('_show');
		Route::get('/edit/{id}', 'admin_slider_edit' )->name('_edit');
		Route::post('/update/{id}', 'admin_slider_update' )->name('_update');
		Route::get('/delete/{id}', 'admin_slider_delete' )->name('_delete');
	});

	
	//*******************************USER CONTROLLER ROUTE ******************************/
	
	Route::get('/admin/user',[UserController::class, 'admin_user'] )->name('admin_user');
	Route::get('/admin/user/create',[UserController::class, 'admin_user_create'] )->name('admin_user_create');
	Route::post('/admin/user/store',[UserController::class, 'admin_user_store'] )->name('admin_user_store');
	Route::get('/admin/user/show/{id}',[UserController::class, 'admin_user_show'] )->name('admin_user_show');
	Route::get('/admin/user/edit/{id}',[UserController::class, 'admin_user_edit'] )->name('admin_user_edit');
	Route::post('/admin/user/update/{id}',[UserController::class, 'admin_user_update'] )->name('admin_user_update');
	Route::get('/admin/user/delete/{id}',[UserController::class, 'admin_user_delete'] )->name('admin_user_delete');
	
	
	
});
