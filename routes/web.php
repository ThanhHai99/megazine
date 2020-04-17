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

Auth::routes();


Route::group(["namespace" => "Guest"], function() {
    Route::get("/", function () {
        return redirect("home");
    });

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
});

Route::group(["namespace" => "Admin"], function() {
    Route::group(["prefix" => "dashboard"], function () {

        Route::get("index", [
            "as" => "admin-index",
            "uses" => "AdminController@getIndex"
        ]);

        Route::group(["prefix" => "news"], function () {

            Route::put("update", [
                "as" => "news.update",
                "uses" => "AdminController@newsUpdate"
            ]);

            Route::put("update_hot_news", [
                "as" => "news.update_hot_news",
                "uses" => "AdminController@newsUpdateHotNews"
            ]);

            Route::put("update_status", [
                "as" => "news.update_status",
                "uses" => "AdminController@newsUpdateStatus"
            ]);            

            Route::put("insert", [
                "as" => "news.insert",
                "uses" => "AdminController@newsInsert"
            ]);

            Route::put("remove", [
                "as" => "news.remove",
                "uses" => "AdminController@newsRemove"
            ]);



            Route::get("style", [
                "as" => "topic-style",
                "uses" => "AdminController@getTopicStyle"
            ]);

            Route::get("fashion", [
                "as" => "topic-fashion",
                "uses" => "AdminController@getTopicFashion"
            ]);

            Route::get("travel", [
                "as" => "topic-travel",
                "uses" => "AdminController@getTopicTravel"
            ]);

            Route::get("sports", [
                "as" => "topic-sports",
                "uses" => "AdminController@getTopicSports"
            ]);

            Route::get("video", [
                "as" => "topic-video",
                "uses" => "AdminController@getTopicVideo"
            ]);

            Route::get("archives", [
                "as" => "topic-archives",
                "uses" => "AdminController@getTopicArchives"
            ]);
        });

        Route::group(["prefix" => "employee"], function () {
            Route::put("update", [
                "as" => "employee.update",
                "uses" => "AdminController@employeeUpdate"
            ]);

            Route::put("update_hot_news", [
                "as" => "employee.update_hot_news",
                "uses" => "AdminController@employeeUpdateRole"
            ]);

            Route::put("update_status", [
                "as" => "employee.update_status",
                "uses" => "AdminController@employeeUpdateStatus"
            ]);            

            Route::put("insert", [
                "as" => "employee.insert",
                "uses" => "AdminController@employeeInsert"
            ]);

            Route::put("remove", [
                "as" => "employee.remove",
                "uses" => "AdminController@employeeRemove"
            ]);

            Route::get("staff", [
                "as" => "employee.staff",
                "uses" => "AdminController@getEmpoyeeStaff"
            ]);

            Route::get("normal_user", [
                "as" => "employee.normal_user",
                "uses" => "AdminController@getNormalUser"
            ]);
        });


    });

});
