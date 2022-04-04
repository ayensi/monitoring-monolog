<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('error',function (){
    Log::error("This is an error message");
});
Route::get('warning',function (){
    Log::warning("This is an warning message");
});
Route::get('alert',function (){
    Log::alert("This is an alert message");
});
Route::get('debug',function (){
    Log::debug("This is an debug message");
});
Route::get('info',function (){
    Log::info("This is an info message");
});
