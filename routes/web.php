<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

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

Route::controller(HomeController::class)->group(function(){

    Route::get('/login', 'login')->name('Login');
    Route::post('/login', 'CheckLogin')->name('Login');

    Route::get('/signup', 'signup')->name('Signup');
    Route::post('/signup', 'CheckSignup')->name('Signup');
    
    Route::get('/logout', 'logout')->name('Logout');




});

Route::controller(adminController::class)->group(function(){

    Route::get('/admin/dashboard', 'adminDashboard')->name('AdminDashboard');
    
    Route::post('/admin/create/post', 'adminPost')->name('AdminPost');

});


Route::controller(userController::class)->group(function(){

    Route::get('/user/dashboard', 'userDashboard')->name('UserDashboard');

    Route::get('/user/news/{id}', 'newsShow')->name('NewsShow');

    Route::get('/user/news/video/{id}', 'showVideo')->name('ShowVideo');

    Route::get('/user/point', 'pointIncrease')->name('PointIncrease');
});



