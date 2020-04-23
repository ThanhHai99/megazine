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

        // Start get
        Route::get("logout", [
            "as" => "dashboard.logout",
            "uses" => "AdminController@getLogout"
        ]);
        
        Route::get("index", [
            "as" => "dashboard.index",
            "uses" => "AdminController@getIndex"
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
        // End get

        // Start CRUD
        Route::group(["prefix" => "news"], function () {
        //     Route::get("fetch", [
        //         "as" => "news.fetch",
        //         "uses" => "AdminController@newsFetch"
        //     ]);

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

        //     Route::put("update_status", [
        //         "as" => "news.update_status",
        //         "uses" => "AdminController@newsUpdateStatus"
        //     ]);  
            
            Route::post("insert_all", [
                "as" => "news.insert_all",
                "uses" => "AdminController@newsInsert_all"
            ]);

            Route::post("insert", [
                "as" => "news.insert",
                "uses" => "AdminController@newsInsert"
            ]);

            Route::put("remove", [
                "as" => "news.remove",
                "uses" => "AdminController@newsRemove"
            ]);



        //     Route::get("style", [
        //         "as" => "topic-style",
        //         "uses" => "AdminController@getTopicStyle"
        //     ]);

        //     Route::get("fashion", [
        //         "as" => "topic-fashion",
        //         "uses" => "AdminController@getTopicFashion"
        //     ]);

        //     Route::get("travel", [
        //         "as" => "topic-travel",
        //         "uses" => "AdminController@getTopicTravel"
        //     ]);

        //     Route::get("sports", [
        //         "as" => "topic-sports",
        //         "uses" => "AdminController@getTopicSports"
        //     ]);

        //     Route::get("video", [
        //         "as" => "topic-video",
        //         "uses" => "AdminController@getTopicVideo"
        //     ]);

        //     Route::get("archives", [
        //         "as" => "topic-archives",
        //         "uses" => "AdminController@getTopicArchives"
        //     ]);
        });

        Route::group(["prefix" => "employee"], function () {
            Route::put("update", [
                "as" => "employee.update",
                "uses" => "AdminController@employeeUpdate"
            ]);

            // Route::put("update_hot_news", [
            //     "as" => "employee.update_hot_news",
            //     "uses" => "AdminController@employeeUpdateRole"
            // ]);

            // Route::put("update_status", [
            //     "as" => "employee.update_status",
            //     "uses" => "AdminController@employeeUpdateStatus"
            // ]);            

            // Route::put("insert", [
            //     "as" => "employee.insert",
            //     "uses" => "AdminController@employeeInsert"
            // ]);

            Route::put("remove", [
                "as" => "employee.remove",
                "uses" => "AdminController@employeeRemove"
            ]);

            // Route::get("staff", [
            //     "as" => "employee.staffnot",
            //     "uses" => "AdminController@getEmpoyeeStaff"
            // ]);

            // Route::get("normal_user", [
            //     "as" => "employee.normal_user",
            //     "uses" => "AdminController@getNormalUser"
            // ]);
        });


    });

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
