<?php

use App\Http\Controllers\home;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;

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

// Route::group(["middleware"=>"auth"],function(){

Route::get("home",[home::class,"index"]);
Route::get("user/create",[user::class,"create"]);
Route::get("user/list",[user::class,"list"]);
Route::post("user/store",[user::class,"store"]);
Route::get("user/delete/{userid}",[user::class,"delete"]);
Route::get("user/edit/{userid}",[user::class,"edit"]);

// });
Route::get("user/login",[user::class,"login"])->name("login");
Route::post("loginrequest",[user::class,"loginRequest"]);

