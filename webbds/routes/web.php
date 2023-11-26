<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'viewIndex'])->name('home');
Route::get('/add',[HomeController::class,'viewAdd'])->name('viewAdd');
Route::get('/edit/{Contract_ID}',[HomeController::class,'edit'])->name('edit');

Route::post('/',[AdminController::class,'store'])->name('store');
Route::post('/update/{Contract_ID}',[AdminController::class,'update'])->name('update');
Route::post('/delete',[AdminController::class,'delete'])->name('delete');
