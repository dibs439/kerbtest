<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('calculator',function(){

            return new Calculator();
    
        });
    }
}
