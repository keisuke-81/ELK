<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategory;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SchoolController;










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
    return view('layouts/top');
});

Auth::routes();
Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('index');
//Route::get('/event/index', [App\Http\Controllers\EventController::class, 'event'])->name('event');
//ここで今の所admin画面を操作します。
//Route::get('/create', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/top', [TopController::class, 'top'])->name('top');
Route::get('/eventDetail', [TopController::class, 'eventDetail'])->name('eventDetail');
Route::get('/calendar', [TopController::class, 'calendar'])->name('calendar');
Route::post('/upload', [ImageController::class, 'upload'])->name('upload');
Route::post('/store', [EventController::class, 'store'])->name('store');
Route::post('/school', [SchoolController::class, 'school'])->name('school');
Route::post('/category', [EventController::class, 'category'])->name('category');
Route::post('/eventCategory', [EventController::class, 'eventCategory'])->name('eventCategory');
//Route::get('/upform', [FormController::class, 'upform'])->name('upform');
Route::post('/upform', [FormController::class, 'upform'])->name('upform');
Route::post('/thanks', [FormController::class, 'thanks'])->name('thanks');
Route::get('/show/{id}', [TopController::class, 'show'])->name('show');
Route::get('/categoryEvent/{id}', [TopController::class, 'categoryEvent'])->name('categoryEvent');
//Route::get('/form', [FormController::class, 'form'])->name('form');
Route::get('/elkevent', [FormController::class, 'elkevent'])->name('elkevent');
//Route::get('/elkevent', [TopController::class, 'elkevent'])->name('elkevent');
Route::get('/myshow/{id}', [FormController::class, 'myshow'])->name('myshow');
Route::get('/check/{id}', [FormController::class, 'check'])->name('check');
Route::get('/search', [EventController::class, 'search'])->name('search');
Route::get('/daySearch', [EventController::class, 'daySearch'])->name('daySearch');
Route::get('/free', [EventController::class, 'free'])->name('free');
Route::get('/paid', [EventController::class, 'paid'])->name('paid');


// /*
// |--------------------------------------------------------------------------
// | 1) User 認証不要
// |--------------------------------------------------------------------------
// */
// Route::get('/', function () { return redirect('/top'); });

// /*
// /*
// |--------------------------------------------------------------------------
// | 2) User ログイン後
// |--------------------------------------------------------------------------
// */
    // Route::group(['middleware' => 'auth:user'], function () {
    //     Route::get('/home', [TopController::class, 'top'])->name('top');
    // });
// /*
// |--------------------------------------------------------------------------
// | 3) Admin 認証不要
// |--------------------------------------------------------------------------
// */
// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/',         function () { return redirect('/admin/home'); });
//     Route::get('login',     'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
//     Route::post('login',    'App\Http\Controllers\Admin\LoginController@login');
//    // [app\Http\Controllers\Admin\LoginController::class, 'paid']
// });

// /*
// |--------------------------------------------------------------------------
// | 4) Admin ログイン後
// |--------------------------------------------------------------------------
// */


// | 3) Admin 認証不要

        // Route::group(['prefix' => 'admin'], function() {
        // Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
        // Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);

        // Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
        // Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');

        // Route::view('/', 'admin')->middleware('auth:admin')->name('admin-home');
        // });

        Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
        Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);

        Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
        Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');

        Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');


// | 4) Admin ログイン後

        Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
            Route::post('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');
            Route::get('home', 'App\Http\Controllers\Admin\LoginController@index')->name('admin.home');
            Route::get('create', [App\Http\Controllers\Admin\LoginController::class, 'create'])->name('create');

        });
            Route::get('create', [App\Http\Controllers\Admin\LoginController::class, 'create'])->name('create');





        // Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
        // Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);

        // Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
        // Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');

        // Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');








