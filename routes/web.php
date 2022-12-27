<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\Backend\BayiController;
use App\Http\Controllers\Backend\UserController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

//semua route untuk bayi
//Route::get('/bayi/view',[BayiController::class, 'BayiView'])->name('bayi.view');
Route::prefix('bayi')->group(function () {
    Route::get('/view',[BayiController::class, 'BayiView'])->name('bayi.view');
    Route::get('/add',[BayiController::class, 'BayiAdd'])->name('bayi.add');
    Route::post('/store',[BayiController::class, 'BayiStore'])->name('bayi.store');
    Route::get('/edit/{id}',[BayiController::class, 'BayiEdit'])->name('bayi.edit');
    Route::post('/update/{id}',[BayiController::class, 'BayiUpdate'])->name('bayi.update');
    Route::get('/delete/{id}',[BayiController::class, 'BayiDelete'])->name('bayi.delete');
});