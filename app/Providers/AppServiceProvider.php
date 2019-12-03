<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(\App\Enjoythetrip\Interfaces\FrontendRepositoryInterface::class,function(){
           return new \App\Enjoythetrip\Repositories\FrontendRepository;
       });
        
        $this->app->bind(\App\Enjoythetrip\Interfaces\BackendRepositoryInterface::class,function()
        {            
            return new \App\Enjoythetrip\Repositories\BackendRepository;
        });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Lecture 49 */
        View::composer('backend.*', '\App\Enjoythetrip\ViewComposers\BackendComposer');
        
        View::composer('frontend.*', function($view){
            $view->with('placeholder', asset('images/placeholder.jpg'));
        });
        
        if (App::environment('local'))
        {
            
           View::composer('*', function ($view) {
            $view->with('novalidate', 'novalidate');
            });
  
        }
        else
        {
            View::composer('*', function ($view) {
            $view->with('novalidate', null);
            });
        }
       Schema::defaultStringLength(191);
    }
}
