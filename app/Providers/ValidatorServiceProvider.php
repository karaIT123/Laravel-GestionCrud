<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        #Class@method
        Validator::extend('aaaa',function($attribute, $value, $parameters){
            return $value == "aaaa";
           /* var_dump($attribute);
            var_dump($value);
            var_dump($parameters);
            die();*/
        });
    }
}
