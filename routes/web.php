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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get("/", function () {
    // return redirect("home");
});

Auth::routes();

Route::get("home", [
    "as" => "home",
    "uses" => "PageController@getHome"
]);

Route::get("style", [
    "as" => "style",
    "uses" => "PageController@getStyle"
]);

Route::get("fashion", [
    "as" => "fashion",
    "uses" => "PageController@getFashion"
]);

Route::get("travel", [
    "as" => "travel",
    "uses" => "PageController@getTravel"
]);

Route::get("sports", [
    "as" => "sports",
    "uses" => "PageController@getSports"
]);

Route::get("video", [
    "as" => "video",
    "uses" => "PageController@getVideo"
]);

Route::get("archives", [
    "as" => "archives",
    "uses" => "PageController@getArchives"
]);

Route::get("single/{id?}", [
    "as" => "single",
    "uses" => "PageController@getSingle"
]);
