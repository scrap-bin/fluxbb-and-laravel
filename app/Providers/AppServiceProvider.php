<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Illuminate\Contracts\Cache\Factory as CacheFactory;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param \Illuminate\Contracts\Cache\Factory $cache
     * @param \App\Models\Setting                 $settings
     *
     * @return void
     */
    public function boot(CacheFactory $cache, Setting $settings)
    {
        $settings = $cache->remember('settings', 24*60, function() use ($settings) {
            return $settings->pluck('conf_value', 'conf_name')->all();
        });
        config()->set('settings', $settings);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
        // . . .
    }
}
