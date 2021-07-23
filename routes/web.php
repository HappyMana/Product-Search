<?php

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

// Route::get("/", function () {
//     return view("welcome");
// });

Route::get("/", "ProductController@home");
Route::get("/search", "ProductController@productSearch");
Route::post("/search/result", "ProductController@getRakutenItems");
Route::get("/search/result/{product}", "ProductController@detail");
Auth::routes();
Route::get('/account', 'HomeController@index')->name('home');
