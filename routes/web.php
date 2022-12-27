<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\PenimbanganController;

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

Route::prefix('penimbangan')->group(function(){
    Route::get('/view',[PenimbanganController::class, 'PenimbanganView'])->name('penimbangan.view');
    Route::get('/add',[PenimbanganController::class, 'PenimbanganAdd'])->name('penimbangan.add');
    Route::post('/store',[PenimbanganController::class, 'PenimbanganStore'])->name('penimbangan.store');
    Route::get('/edit/{id}',[PenimbanganController::class, 'PenimbanganEdit'])->name('penimbangan.edit');
    Route::post('/update/{id}',[PenimbanganController::class, 'PenimbanganUpdate'])->name('penimbangan.update');
    Route::get('/delete/{id}',[PenimbanganController::class, 'PenimbanganDelete'])->name('penimbangan.delete');
});