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

use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;



Route::group(["namespace" => "Admin"], function() {  
    Route::group(["prefix" => "dashboard"], function () {
        Route::get("index", [
            "as" => "dashboard.index",
            "uses" => "AdminController@getIndex"
        ]);        
    });
});

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

    Route::get("fashion/more", [
        "as" => "fashion.more",
        "uses" => "PageController@getFashionMore"
    ]);

    Route::get("travel", [
        "as" => "travel",
        "uses" => "PageController@getTravel"
    ]);

    Route::get("travel/more", [
        "as" => "travel.more",
        "uses" => "PageController@getTravelMore"
    ]);

    Route::get("sports", [
        "as" => "sports",
        "uses" => "PageController@getSports"
    ]);

    Route::get("sports/more", [
        "as" => "sports.more",
        "uses" => "PageController@getSportsMore"
    ]);

    Route::get("video", [
        "as" => "video",
        "uses" => "PageController@getVideo"
    ]);

    Route::get("video/more", [
        "as" => "video.more",
        "uses" => "PageController@getVideoMore"
    ]);

    Route::get("single/{id?}", [
        "as" => "single",
        "uses" => "PageController@getSingle"
    ]);

    Route::put("news/subcribe", [
        "as" => "news.subcribe",
        "uses" => "PageController@subcribe"
    ]);

    Route::post("news/send", [
        "as" => "news.send",
        "uses" => "PageController@sendNews"
    ]);

    Route::put("comment/new", [
        "as" => "comment.new",
        "uses" => "PageController@commentNew"
    ]);

    

    
});

Route::group(["namespace" => "Auth"], function() {
    Route::group(["prefix" => "dashboard"], function () {
        Route::get("login", [
            "as" => "dashboard.login",
            "uses" => "AuthenticateController@getLogin"
            ]);
            
        Route::get("logout", [
            "as" => "dashboard.logout",
            "uses" => "AuthenticateController@getLogout"
            ]);
        });
            
    Route::group(["prefix" => "auth"], function () {
        Route::get("google", [
            "as" => "auth.google",
            "uses" => "SocialAuthGoogleController@redirect"
        ]);
        
        Route::get("google/callback", [
            "as" => "auth.google.callback",
            "uses" => "SocialAuthGoogleController@callback"
        ]);
        
        Route::get("facebook", [
            "as" => "auth.facebook",
            "uses" => "SocialAuthFacebookController@redirect"
        ]);
        
        Route::get("facebook/callback", [
            "as" => "auth.facebook.callback",
            "uses" => "SocialAuthFacebookController@callback"
        ]);
    });

});

Route::group(["namespace" => "EmployeeController"], function() {
    Route::get("employee/all", [
        "as" => "employee.all",
        "uses" => "EmployeeController@getEmployeeAll"
    ]);

    Route::get("employee/admin", [
        "as" => "employee.admin",
        "uses" => "EmployeeController@getEmployeeAdmin"
    ]);

    Route::get("employee/staff", [
        "as" => "employee.staff",
        "uses" => "EmployeeController@getEmployeeStaff"
    ]);

    Route::get("employee/creator", [
        "as" => "employee.creator",
        "uses" => "EmployeeController@getEmployeeCreator"
    ]);

    Route::get("employee/guest", [
        "as" => "employee.guest",
        "uses" => "EmployeeController@getEmployeeGuest"
    ]);

    Route::group(["prefix" => "employee"], function () {
        Route::put("update", [
            "as" => "employee.update",
            "uses" => "EmployeeController@employeeUpdate"
        ]);

        Route::put("remove", [
            "as" => "employee.remove",
            "uses" => "EmployeeController@employeeRemove"
        ]);

        Route::put("update_status_employee", [
            "as" => "employee.updateEmployeeStatus",
            "uses" => "EmployeeController@employeeUpdateStatus"
        ]);
    });
});

Route::group(["namespace" => "VideoController"], function() {  
    Route::group(["prefix" => "dashboard"], function () {
        Route::get("video/all", [
            "as" => "video.all",
            "uses" => "VideoController@getVideoAll"
        ]);

        Route::get("video/style", [
            "as" => "video.style",
            "uses" => "VideoController@getVideoStyle"
        ]);

        Route::get("video/fashion", [
            "as" => "video.fashion",
            "uses" => "VideoController@getVideoFashion"
        ]);

        Route::get("video/travel", [
            "as" => "video.travel",
            "uses" => "VideoController@getVideoTravel"
        ]);

        Route::get("video/sports", [
            "as" => "video.sports",
            "uses" => "VideoController@getVideoSports"
        ]);

        Route::group(["prefix" => "video"], function () {
            Route::put("update", [
                "as" => "video.update",
                "uses" => "VideoController@videoUpdate"
            ]);

            Route::put("remove", [
                "as" => "video.remove",
                "uses" => "VideoController@videoRemove"
            ]);

            Route::post("insert", [
                "as" => "video.insert",
                "uses" => "VideoController@videoInsert"
            ]);

            Route::put("update_hot_video", [
                "as" => "news.updateHotVideo",
                "uses" => "VideoController@newsUpdateHotVideo"
            ]);

            // Route::put("update_hot_video_yes", [
            //     "as" => "news.updateHotVideoYes",
            //     "uses" => "VideoController@newsUpdateHotVideoYes"
            // ]);

            

            // Route::put("update_hot_video_no", [
            //     "as" => "news.updateHotVideoNo",
            //     "uses" => "VideoController@newsUpdateHotVideoNo"
            // ]);

            Route::put("update_status_video", [
                "as" => "news.updateStatusVideo",
                "uses" => "VideoController@newsUpdateStatusVideo"
            ]);

            Route::put("update_status_video_yes", [
                "as" => "news.updateStatusVideoYes",
                "uses" => "VideoController@newsUpdateStatusVideoYes"
            ]);

            Route::put("update_status_video_no", [
                "as" => "news.updateStatusVideoNo",
                "uses" => "VideoController@newsUpdateStatusVideoNo"
            ]);

            Route::post("update_image_video", [
                "as" => "news.update_image_video",
                "uses" => "VideoController@newsUpdateImageVideo"
            ]);

            Route::post("update_video_video", [
                "as" => "news.update_video_video",
                "uses" => "VideoController@newsUpdateVideoVideo"
            ]);
        });
    });
});

Route::group(["namespace" => "NewsController"], function() {  
    Route::group(["prefix" => "dashboard"], function () {
        Route::get("news/all", [
            "as" => "news.all",
            "uses" => "NewsController@getNewsAll"
        ]);
    
        Route::get("news/style", [
            "as" => "news.style",
            "uses" => "NewsController@getNewsStyle"
        ]);
    
        Route::get("news/fashion", [
            "as" => "news.fashion",
            "uses" => "NewsController@getNewsFashion"
        ]);
    
        Route::get("news/travel", [
            "as" => "news.travel",
            "uses" => "NewsController@getNewsTravel"
        ]);
    
        Route::get("news/sports", [
            "as" => "news.sports",
            "uses" => "NewsController@getNewsSports"
        ]);

        Route::group(["prefix" => "news"], function () {
            Route::put("update", [
                "as" => "news.update",
                "uses" => "NewsController@newsUpdate"
            ]);

            Route::put("update_hot_news", [
                "as" => "news.updateHotNews",
                "uses" => "NewsController@newsUpdateHotNews"
            ]);

            Route::put("update_status_news_yes", [
                "as" => "news.updateStatusNews",
                "uses" => "NewsController@newsUpdateStatusNews"
            ]);
            
            Route::post("update_image_news", [
                "as" => "news.update_image_news",
                "uses" => "NewsController@newsUpdateImageNews"
            ]);            

            Route::post("insert", [
                "as" => "news.insert",
                "uses" => "NewsController@newsInsert"
            ]);

            Route::put("remove", [
                "as" => "news.remove",
                "uses" => "NewsController@newsRemove"
            ]);
        });
    });
});

Route::group(["namespace" => "SlideController"], function() {  
    Route::group(["prefix" => "dashboard"], function () {
        Route::get("slide/all", [
            "as" => "slide.all",
            "uses" => "SlideController@getSlideAll"
        ]);

        Route::group(["prefix" => "slide"], function () {
            Route::post("update", [
                "as" => "slide.update",
                "uses" => "SlideController@slideUpdate"
            ]);

            Route::post("update_image", [
                "as" => "slide.update_image",
                "uses" => "SlideController@slideUpdateImage"
            ]);

            Route::put("remove", [
                "as" => "slide.remove",
                "uses" => "SlideController@slideRemove"
            ]);

            Route::post("insert", [
                "as" => "slide.insert",
                "uses" => "SlideController@slideInsert"
            ]);
        });
    });
});

