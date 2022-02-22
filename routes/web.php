<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
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

/*Route::get('articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('articles/{article}', [\App\Http\Controllers\ArticleController::class,'show']);
Route::post('articles', [\App\Http\Controllers\ArticleController::class, 'store']);
Route::put('articles/{article}', [\App\Http\Controllers\ArticleController::class, 'update']);
Route::delete('articles/{article}', [\App\Http\Controllers\ArticleController::class, 'delete']);*/
Route::get('/', function (){
   return view('wishlist.home');
});


Auth::routes();

Route::get('/google-login', 'GoogleAuthController@redirectToProvider');
Route::get('/callback', 'GoogleAuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
