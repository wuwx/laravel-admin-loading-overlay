<?php

namespace Wuwx\LaravelAdminLoadingOverlay;

use Encore\Admin\Facades\Admin;
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

        Admin::script('
            $(document).ajaxStart(function(){
                $.LoadingOverlay("show");
            });
            $(document).ajaxStop(function(){
                $.LoadingOverlay("hide");
            });
        ');

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin/jquery-loading-overlay')],
                'laravel-admin-loading-overlay'
            );
        }
    }
}
