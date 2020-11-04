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

Route::get('/admin', function () {
    return view('res');
})->middleware('auth');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('categories','CategoryController@index');
    Route::get('category/create','CategoryController@create');
    Route::post('category/store','CategoryController@store');
    Route::get('delete/category/{id}','CategoryController@destroy');

    Route::get('foods','FoodController@index');
    Route::get('food/create','FoodController@create');
    Route::post('food/store','FoodController@store');
    Route::get('delete/food/{id}','FoodController@destroy');
});


Route::get('/', 'FrontController@index');
