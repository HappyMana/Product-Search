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
Route::post("/search/result", "ProductController@store")->name("favorite.store");

Auth::routes();
Route::get('/account', 'HomeController@index')->name('account');
Route::get("/account/favorite", "ProductUserController@index")->name("account.favorite");
Route::get("/account/favorite/{id}", "ProductUserController@show")->name("account.favorite.show");
