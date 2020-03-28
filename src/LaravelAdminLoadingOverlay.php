<?php

namespace Wuwx\LaravelAdminLoadingOverlay;

use Encore\Admin\Extension;

class LaravelAdminLoadingOverlay extends Extension
{
    public $name = 'loading-overlay';

    public $js = [
        "vendor/laravel-admin/jquery-loading-overlay/loadingoverlay.min.js"
    ];

    public $assets = __DIR__.'/../resources/assets';
}
