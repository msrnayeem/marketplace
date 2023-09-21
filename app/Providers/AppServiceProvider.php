<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('frontend.components.header', function ($view) {
            $categories = Cache::remember('categories', 3600 * 24 * 7, function () {
                return Category::select('id', 'name')->get();
            });

            $view->with('categories', $categories);
        });
    }

}