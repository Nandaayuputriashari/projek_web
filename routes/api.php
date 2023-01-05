<?php

use Illuminate\Http\Request;
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

// Route::post('register', 'App\Http\Controllers\Api\Auth\AuthController@register');
// Route::post('login', 'App\Http\Controllers\Api\Auth\AuthController@login');
// Route::post('read', 'App\Http\Controllers\Api\TugasApi\BidanController@read');
// Route::post('update', 'App\Http\Controllers\Api\TugasApi\BidanController@update');
// Route::post('create', 'App\Http\Controllers\Api\TugasApi\BidanController@create');
// Route::post('delete', 'App\Http\Controllers\Api\TugasApi\BidanController@delete');

//login
Route::post('login', 'App\Http\Controllers\Api\Android\UserController@login');
Route::post('changePassword', 'App\Http\Controllers\Api\Android\UserController@gantiPassword');

//bidan
Route::post('viewBidan', 'App\Http\Controllers\Api\Android\BidanController@view');

//posyandu
Route::post('viewPosyandu', 'App\Http\Controllers\Api\Android\PosyanduController@view');
Route::post('viewAllPosyandu', 'App\Http\Controllers\Api\Android\PosyanduController@viewAll');

//bayi
Route::post('viewBayi', 'App\Http\Controllers\Api\Android\BayiController@view');
Route::post('viewAllBayi', 'App\Http\Controllers\Api\Android\BayiController@viewAll');
Route::post('viewLimitAllBayi', 'App\Http\Controllers\Api\Android\BayiController@viewLimitAll');

//penimbangan
Route::post('addPenimbangan', 'App\Http\Controllers\Api\Android\PenimbanganController@add');
Route::post('viewAllPenimbangan', 'App\Http\Controllers\Api\Android\PenimbanganController@viewAll');
