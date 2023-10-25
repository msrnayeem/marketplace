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
                return Category::select('id', 'name', 'key', 'class')->with('subCategories.subSubCategories')->get();
            });

            // if (!Cache::has('categories')) {
            //     $data = Category::select('id', 'name', 'key', 'class')->with('subCategories.subSubCategories')->get();
            //     Cache::put('categories', $data, 60 * 24 * 7);

            // }

            // $categories = Cache::get('categories');


            $view->with('categories', $categories);
        });

        View::composer('frontend.components.seller-header', function ($view) {
            $categories = Cache::remember('categories', 3600 * 24 * 7, function () {
                return Category::select('id', 'name', 'key', 'class')->with('subCategories.subSubCategories')->get();
            });

            // if (!Cache::has('categories')) {
            //     $data = Category::select('id', 'name', 'key', 'class')->with('subCategories.subSubCategories')->get();
            //     Cache::put('categories', $data, 60 * 24 * 7);

            // }

            // $categories = Cache::get('categories');


            $view->with('categories', $categories);
        });
    }

}
