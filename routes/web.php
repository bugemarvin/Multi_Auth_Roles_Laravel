<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminContoller::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminContoller::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminContoller::class,'settings'])->name('admin.settings');
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserContoller::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserContoller::class,'profile'])->name('user.profile');
    Route::get('settings',[UserContoller::class,'settings'])->name('user.settings');
});
