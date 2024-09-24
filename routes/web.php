<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PanierController;
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
Route::get('/test/{id?}', function ($id=null) {
    return view('test')->with('var',$id);
})->where('id','[a-fA-F]+');

Route::get('/cat', [CategoryController::class,'index']);

Route::resource('/paniers', PanierController::class);