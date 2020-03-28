<?php

namespace Wuwx\LaravelAdminLoadingOverlay;

use Illuminate\Support\ServiceProvider;

class LaravelAdminLoadingOverlayServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(LaravelAdminLoadingOverlay $extension)
    {
        if (! LaravelAdminLoadingOverlay::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-loading-overlay');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/wuwx/laravel-admin-loading-overlay')],
                'laravel-admin-loading-overlay'
            );
        }

        $this->app->booted(function () {
            LaravelAdminLoadingOverlay::routes(__DIR__.'/../routes/web.php');
        });
    }
}