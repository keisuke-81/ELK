<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategory;
use App\Http\Controllers\FormController;









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
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/top', [TopController::class, 'top'])->name('top');
Route::get('/eventDetail', [TopController::class, 'eventDetail'])->name('eventDetail');
Route::get('/calendar', [TopController::class, 'calendar'])->name('calendar');
Route::post('/upload', [ImageController::class, 'upload'])->name('upload');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::post('/school', [HomeController::class, 'school'])->name('school');
Route::post('/category', [HomeController::class, 'category'])->name('category');
Route::post('/eventCategory', [HomeController::class, 'eventCategory'])->name('eventCategory');
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



// Route::get('form', 'FormController@showRegistrationForm')->name('show');
// Route::post('form', 'FormController@post')->name('post');
// Route::get('form/confirm', 'FormController@confirm')->name('confirm');
// Route::post('form/confirm', 'FormController@register')->name('resister');
// Route::get('form/complete', 'FormController@complete')->name('complete');












