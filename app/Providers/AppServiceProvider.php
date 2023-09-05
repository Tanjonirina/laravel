<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('mot_de_passe', function ($attribute, $value, $parameters, $validator) {
            // Votre logique de validation personnalisée pour le mot de passe ici
            // Retournez true si la validation réussit, sinon false
        });
        paginator::useBootstrapFive();
       paginator::useBootstrapFour();
    }
}
