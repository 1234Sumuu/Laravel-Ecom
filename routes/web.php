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


Route::get('/contact', function(){
    return view('contact');
});

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
//Route::get('/', [App\Http\Controllers\PagesController::class, 'contact']);