<?php

namespace App\Providers;

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
        \View::composer('back.*', function ($view) {
            $view->with('categories', \App\Article::groupBy('category')->get(['category'])->pluck('category'));
            $view->with('tags', \App\Tag::all());
            $view->with('series', \App\Article::whereNotNull('series')->groupBy('series')->pluck('series'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
