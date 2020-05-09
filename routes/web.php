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
    
    Route::get("style/more", [
        "as" => "style.more",
        "uses" => "PageController@getStyleMore"
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

        // Start get
        Route::get("logout", [
            "as" => "dashboard.logout",
            "uses" => "AdminController@getLogout"
        ]);
        
        Route::get("index", [
            "as" => "dashboard.index",
            "uses" => "AdminController@getIndex"
        ]);

        Route::get("employee/all", [
            "as" => "employee.all",
            "uses" => "AdminController@getEmployeeAll"
        ]);

        Route::get("employee/staff", [
            "as" => "employee.staff",
            "uses" => "AdminController@getEmployeeStaff"
        ]);

        Route::get("employee/normal_user", [
            "as" => "employee.normal_user",
            "uses" => "AdminController@getEmployeeNormalUser"
        ]);

        Route::get("news/all", [
            "as" => "news.all",
            "uses" => "AdminController@getNewsAll"
        ]);

        Route::get("news/style", [
            "as" => "news.style",
            "uses" => "AdminController@getNewsStyle"
        ]);

        Route::get("news/fashion", [
            "as" => "news.fashion",
            "uses" => "AdminController@getNewsFashion"
        ]);

        Route::get("news/travel", [
            "as" => "news.travel",
            "uses" => "AdminController@getNewsTravel"
        ]);

        Route::get("news/sports", [
            "as" => "news.sports",
            "uses" => "AdminController@getNewsSports"
        ]);

        Route::get("news/video", [
            "as" => "news.video",
            "uses" => "AdminController@getNewsVideo"
        ]);

        Route::get("news/archives", [
            "as" => "news.archives",
            "uses" => "AdminController@getNewsArchives"
        ]);

        Route::get("slide/all", [
            "as" => "slide.all",
            "uses" => "AdminController@getSlideAll"
        ]);

        // End get

        // Start CRUD
        Route::group(["prefix" => "news"], function () {
            Route::put("update", [
                "as" => "news.update",
                "uses" => "AdminController@newsUpdate"
            ]);

            Route::put("update_hot_news_yes", [
                "as" => "news.updateHotNewsYes",
                "uses" => "AdminController@newsUpdateHotNewsYes"
            ]);

            Route::put("update_hot_news_no", [
                "as" => "news.updateHotNewsNo",
                "uses" => "AdminController@newsUpdateHotNewsNo"
            ]);

            Route::put("update_hot_video_yes", [
                "as" => "news.updateHotVideoYes",
                "uses" => "AdminController@newsUpdateHotVideoYes"
            ]);

            Route::put("update_hot_video_no", [
                "as" => "news.updateHotVideoNo",
                "uses" => "AdminController@newsUpdateHotVideoNo"
            ]);

            Route::put("update_status_news_yes", [
                "as" => "news.updateStatusNewsYes",
                "uses" => "AdminController@newsUpdateStatusNewsYes"
            ]);

            Route::put("update_status_news_no", [
                "as" => "news.updateStatusNewsNo",
                "uses" => "AdminController@newsUpdateStatusNewsNo"
            ]);

            Route::put("update_status_video_yes", [
                "as" => "news.updateStatusVideoYes",
                "uses" => "AdminController@newsUpdateStatusVideoYes"
            ]);

            Route::put("update_status_video_no", [
                "as" => "news.updateStatusVideoNo",
                "uses" => "AdminController@newsUpdateStatusVideoNo"
            ]);
            
            Route::post("insert_all", [
                "as" => "news.insert_all",
                "uses" => "AdminController@newsInsert_all"
            ]);

            Route::post("update_image_news", [
                "as" => "news.update_image_news",
                "uses" => "AdminController@newsUpdateImageNews"
            ]);

            Route::post("update_image_video", [
                "as" => "news.update_image_video",
                "uses" => "AdminController@newsUpdateImageVideo"
            ]);

            Route::post("insert", [
                "as" => "news.insert",
                "uses" => "AdminController@newsInsert"
            ]);

            Route::put("remove", [
                "as" => "news.remove",
                "uses" => "AdminController@newsRemove"
            ]);
        });

        Route::group(["prefix" => "employee"], function () {
            Route::put("update", [
                "as" => "employee.update",
                "uses" => "AdminController@employeeUpdate"
            ]);

            Route::put("remove", [
                "as" => "employee.remove",
                "uses" => "AdminController@employeeRemove"
            ]);

            Route::put("update_status_employee_yes", [
                "as" => "employee.updateEmployeeStatusYes",
                "uses" => "AdminController@employeeUpdateStatusYes"
            ]);

            Route::put("update_status_employee_no", [
                "as" => "employee.updateEmployeeStatusNo",
                "uses" => "AdminController@employeeUpdateStatusNo"
            ]);

        });

        Route::group(["prefix" => "slide"], function () {
            Route::put("update", [
                "as" => "slide.update",
                "uses" => "AdminController@slideUpdate"
            ]);

            Route::post("update_image", [
                "as" => "slide.update_image",
                "uses" => "AdminController@slideUpdateImage"
            ]);
        });


    });

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
