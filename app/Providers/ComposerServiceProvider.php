<?php

namespace App\Providers;

use Illuminate\View\Factory as ViewFactory;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param \Illuminate\View\Factory $factory
     *
     * @return void
     */
    public function boot(ViewFactory $factory)
    {
        $factory->composer('layouts.*', function ($view) {
            $view->with('settings', config('settings'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
