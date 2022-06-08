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
    return view('home.login');
});

Route::controller(HomeController::class)->group(function(){

    //Login
    Route::get('/login', 'login')->name('Login');
    Route::post('/login', 'CheckLogin')->name('Login');

    //Signup
    Route::get('/signup', 'signup')->name('Signup');
    Route::post('/signup', 'CheckSignup')->name('Signup');
    
    //Logout
    Route::get('/logout', 'logout')->name('Logout');




});

Route::controller(adminController::class)->group(function(){

    // Admin Dashboard
    Route::get('/admin/dashboard', 'adminDashboard')->name('AdminDashboard')->middleware('AdminCheck');
    
    //Admin Create New Posts
    Route::post('/admin/create/post', 'adminPost')->name('AdminPost')->middleware('AdminCheck');

});


Route::controller(userController::class)->group(function(){

    //User Dashboard
    Route::get('/user/dashboard', 'userDashboard')->name('UserDashboard')->middleware('CustomerCheck');

    //User Seeing on their Desire Post
    Route::get('/user/news/{id}', 'newsShow')->name('NewsShow')->middleware('CustomerCheck');

    //User watching Video
    Route::get('/user/news/video/{id}', 'showVideo')->name('ShowVideo')->middleware('CustomerCheck');

    // After Completing Video Points Increased
    Route::get('/user/point', 'pointIncrease')->name('PointIncrease')->middleware('CustomerCheck');
});



