<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route:: resource('artikel','App\Http\Controllers\ArticleController');
// Route::get('artikel', 'App\Http\Controllers\ArticleController@index');

// Route::get('artikel', [ArticleController::class,'index']);

// Route::get('artikel/create', [ArticleController::class,'create']);
// Route::post('artikel/', [ArticleController::class,'store']);

// Route::get('artikel/{slug}', [ArticleController::class,'show']);

// Route::get('artikel/{id}/edit', [ArticleController::class,'edit']);

// Route::put('artikel/{id}', [ArticleController::class,'update']);

// Route::delete('artikel/{id}', [ArticleController::class,'destroy']);
