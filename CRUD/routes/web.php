<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/addproduct', function () {
    return view('addproduct');
});


Route::get('/products',[ProductController::class,"index"]);
Route::post('/add',[ProductController::class,"create"])->name('add');

Route::get('/edit/{id}',[ProductController::class,"edit"]);

Route::get('/delete/{id}',[ProductController::class,"destroy"] );

Route::post('/up',[ProductController::class,"update"]);