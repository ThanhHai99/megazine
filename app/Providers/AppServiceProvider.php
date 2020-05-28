<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Topic;
use App\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        schema::defaultStringLength(191);

        view()->composer('layouts.admin.sidebar', function($view) {
            $topics = Topic::whereBetween('id', array(1, 4))->get();
            // dd($topics);
            
            $view->with('topics', $topics);
        });

        view()->composer('layouts.guest.navbar', function($view) {
            $topics = Topic::whereBetween('id', array(1, 4))->get();
            // dd($topics);
            $view->with('topics', $topics);
        });

        view()->composer('page.admin._table', function($view) {
            $topics = Topic::whereBetween('id', array(1, 4))->get();
            // dd($topics);
            $view->with('topics', $topics);
        });

        view()->composer('page.admin._table', function($view) {
            $roles = Role::whereBetween('id', array(1, 3))->get();
            $view->with('roles', $roles);
        });

    }
}
