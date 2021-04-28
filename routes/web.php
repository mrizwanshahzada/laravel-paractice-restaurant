<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'home']);
Route::get('/list',[RestaurantController::class,'list'])->name('list');
Route::post('/add', [RestaurantController::class,'add'])->name('add');
Route::get('/delete/{id}', [RestaurantController::class,'delete'])->name('delete');
Route::get('/edit/{id}', [RestaurantController::class,'edit'])->name('edit');
Route::view('/add', 'restaurant.add')->name('add');
