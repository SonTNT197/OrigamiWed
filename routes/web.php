<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



    

Route::get('/', [App\Http\Controllers\HomePageController::class, 'menu']);
Route::get('/listCategory',[App\Http\Controllers\HomePageController::class, 'listCat']);
Route::get('/listLevel',[App\Http\Controllers\HomePageController::class, 'listLev']);
Route::get('/listOrigami/category/{id_category}',[App\Http\Controllers\HomePageController::class, 'listOrigamiByCat']);
Route::get('/listOrigami/level/{id_level}',[App\Http\Controllers\HomePageController::class, 'listOrigamiByLev']);
Route::get('/origami/{id_origami}',[App\Http\Controllers\HomePageController::class, 'origami']);
Route::get('/history',[App\Http\Controllers\HomePageController::class, 'history']);
Route::get('/aboutUs',[App\Http\Controllers\HomePageController::class, 'aboutUs']);


Auth::routes();
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('home');


