<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr;
use App\Models\ShopeeProducts;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SearchRepository::class, EloquentSearchRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = ShopeeProducts::all();
        foreach($categories as $category){
            $catData[] = $category->Category;
        } 
        $catData = array_unique($catData);
        $catData = array_values($catData);
        $catData = Arr::sort($catData);

        View::share('includes.header',$catData);  
    }
}
