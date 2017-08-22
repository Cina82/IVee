<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class userRoleprovider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       // return $roles = DB::table('roles')->get();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
