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
/*
 * lista Routes
 */
Route::get('/listas',[\App\Http\Controllers\ListaController::class,'index'])->name('listas.index');
Route::get('/listas/{Id}',[\App\Http\Controllers\ListaController::class,'show'])->name('listas.show');
Route::post('/listas',[\App\Http\Controllers\ListaController::class,'store'])->name("listas.store");
Route::put('/listas/{Id}' ,[\App\Http\Controllers\ListaController::class,'update'])->name("listas.update");
Route::delete('/listas/{Id}',[\App\Http\Controllers\ListaController::class,'destroy'])->name("listas.destroy");
/*
 * item Routes
 */
Route::get('/listas/{id}/items',[\App\Http\Controllers\ItemController::class,'index'])->name('items.index');
Route::get('/listas/items/{id}',[\App\Http\Controllers\ItemController::class,'show'])->name('items.show');
Route::post('listas/{id}/items',[\App\Http\Controllers\ItemController::class,'store'])->name("items.store");
Route::put('/listas/items/{id}' ,[\App\Http\Controllers\ItemController::class,'update'])->name("items.update");
Route::delete('/listas/{id}/items',[\App\Http\Controllers\ItemController::class,'destroy'])->name("items.destroy");