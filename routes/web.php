<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::controller(AdminController::class)->group(function(){
    Route::get('/admins', 'index')->name('admins.index');
    Route::get('/admins/create','create')->name('admins.create');
    Route::post('/admins', 'store')->name('admins.store');
});
    