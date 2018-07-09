<?php

namespace App\Providers;

use App\Permissions;
use Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    use Permissions;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Horizon::auth(function ($request) {
            return $this->mustBeVotenAdministrator();
        });

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (!\App::runningInConsole()) {
            $this->app->singleton('App\Settings', function () {
                return Auth::user()->settings();
            });
        }
    }
}
