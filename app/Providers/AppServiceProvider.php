<?php

namespace App\Providers;

use App\Suggestion;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // number of outstanding suggestions for the top nav
        View::composer('layouts.app', function ($view) {
            $view->with('suggestionCount', Suggestion::where('processed', false)->get()->count());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
