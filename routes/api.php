<?php

use App\Http\Controllers\Api\user;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get("api/create",APIUser::class,"store");
// Route::get("api",[APIUser::class,"list"]);
Route::get("list",[user::class,"list"]);
Route::post("create",[user::class,"store"]);


