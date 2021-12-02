<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers;

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
// Route::get('/','App\Http\Controllers\PagesController@index');


// Route::get('/contact', function(){
//     return view('contact');
// });

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/products', [App\Http\Controllers\PagesController::class, 'products'])->name('products');

Route::prefix('admin')->group(function () {

Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/product/create', [App\Http\Controllers\AdminPagesController::class, 'create'])->name('admin.product.create');

});