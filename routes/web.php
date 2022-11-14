<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\siteController;
Route::get('/', [siteController::class,'sitepage']   );


use App\Http\Controllers\adminController;
Route::get('/admin', [adminController::class,'adminpage']   );

use App\Http\Controllers\posttestController;
Route::get('/f', [posttestController::class,'add']   );

use App\Http\Controllers\ArticlesController;
Route::get('/a', [ArticlesController::class,'index'])->name('root');
Route::resource('articles',ArticlesController::class);

use App\Http\Controllers\OrdersController;
Route::get('/o', [OrdersController::class,'indexorder'])->name('order');
Route::resource('orderact',OrdersController::class);
