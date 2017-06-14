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
        view()->share('tags', \App\Tag::orderBy('name')->get());
        \View::composer('back.*', function ($view) {
            $view->with('categories', \App\Article::groupBy('category')->get(['category'])->pluck('category'));
            $view->with('series', \App\Article::whereNotNull('series')->groupBy('series')->pluck('series'));
        });
        \View::composer('front.*', function ($view) {
            $view->with('hots', \App\Article::orderBy('view', 'desc')->take(5)->get());
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
