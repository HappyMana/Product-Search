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

Route::get("/", "ProductController@top")->name("top");

Route::get("/about", "ProductController@about")->name("about");

Route::get("/search", "ProductController@productSearch")->name("search");
Route::post("/search/result", "ProductController@getRakutenItems")->name("search.result");
Route::get("/search/result/{key}", "ProductController@detail")->name("search.result.detail");
Route::post("/home/favorite/{key}", "ProductController@store")->name("favorite.store");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/information', 'HomeController@information')->name('home.info');
Route::get('/home/have', 'HomeController@have')->name('home.have');

Route::get("/home/favorite", "ProductUserController@index")->name("home.favorite");
Route::get("/home/favorite/{id}", "ProductUserController@show")->name("home.favorite.show");
Route::delete("/home/favorite/{id}", "ProductUserController@delete")->name("home.favorite.destroy");
