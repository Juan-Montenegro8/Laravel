<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Route::pattern('id', '[1-9]+');
        View::share('prueba', 'esta es la prueba');
        /*View::composer('welcome', function($view){
            $view->whith('prueba2', 'esta es la prueba');
        });*/
        View::composer(['posts.show'], CompanyComposer::class);
        /*
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar'
        ])
        */
    }
}
