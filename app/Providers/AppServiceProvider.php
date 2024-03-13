<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('password_uppercase', function ($attribute, $value, $parameters, $validator) {
            // Check if password contains at least one uppercase letter
            $uppercase = preg_match('@[A-Z]@', $value);
    

            // Ensure all conditions are met
            return $uppercase;
        });
        Validator::replacer('password_uppercase', function ($message, $attribute, $rule, $parameters) {
            // Customize the error message
            return str_replace(':attribute', $attribute, 'The '.$attribute.' must contain at least one uppercase letter.');
        });

        Validator::extend('password_symbol', function ($attribute, $value, $parameters, $validator) {
            // Check if password contains at least one symbol
            $symbol = preg_match('@[^\w]@', $value);
    
    
            // Ensure all conditions are met
            return $symbol;
        });
        Validator::replacer('password_symbol', function ($message, $attribute, $rule, $parameters) {
            // Customize the error message
            return str_replace(':attribute', $attribute, 'The '.$attribute.' must contain at least one symbol letter.');
        });

        Validator::extend('password_number', function ($attribute, $value, $parameters, $validator) {
            // Check if password contains at least one symbol
            $number = preg_match('@[0-9]@', $value);
    
    
            // Ensure all conditions are met
            return $number;
        });
        Validator::replacer('password_number', function ($message, $attribute, $rule, $parameters) {
            // Customize the error message
            return str_replace(':attribute', $attribute, 'The '.$attribute.' must contain at least one number letter.');
        });

    }
}
