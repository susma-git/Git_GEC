<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

Route::get('/home', [SiteController::class, 'getHome'])->name('getHome');
Route::get('/about',[SiteController::class,'getAbout'])->name('getAbout');
Route::get('/gallery',[SiteController::class,'getGallery'])->name('getGallery');
Route::get('/contact',[SiteController::class,'getContact'])->name('getContact');
Route::get('/service',[SiteController::class,'getService'])->name('getService');
// Backend route starts from here
//about
Route::get('/managea',[HomeController::class,'getAboutManage'])->name('getAboutManage');
Route::post('/managea',[HomeController::class,'postAboutAdd'])->name('postAboutAdd');
Route::get('/admin/about/managea/{about}',[HomeController::class,'getEditAbout'])->name('getEditAbout');
Route::get('/admin/about/delete/{about}',[HomeController::class,'getDeleteAbout'])->name('getDeleteAbout');
Route::post('/admin/about/edit/{about}',[HomeController::class,'postAboutEdit'])->name('postAboutEdit');

//service 
Route::get('/manages',[HomeController::class,'getServiceManage'])->name('getServiceManage');
Route::post('/manages',[HomeController::class,'postServiceAdd'])->name('postServiceAdd');
Route::get('/manages/{service}',[HomeController::class,'getServiceEdit'])->name('getServiceEdit');
Route::get('/admin/service/delete/{service}',[HomeController::class,'getServiceDelete'])->name('getServiceDelete');
Route::post('/admin/service/edit/{service}',[HomeController::class,'postServiceEdit'])->name('postServiceEdit');
//gallery
Route::get('/galleryg',[HomeController::class,'getGalleryManage'])->name('getGalleryManage');
Route::post('/admin/gallery/galleryg',[HomeController::class,'postGalleryAdd'])->name('postGalleryAdd');
Route::get('/admin/galleryg/{gallery}',[HomeController::class,'getEditGallery'])->name('getEditGallery');
Route::post('/admin/gallery/edit/{gallery}',[HomeController::class,'postGalleryEdit'])->name('postGalleryEdit');
Route::get('/admin/gallery/delete/{gallery}',[HomeController::class,'getDeleteGallery'])->name('getDeleteGallery');
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
            

Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify'); 
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});