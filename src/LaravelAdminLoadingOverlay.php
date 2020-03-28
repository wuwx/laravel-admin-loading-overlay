<?php

namespace Wuwx\LaravelAdminLoadingOverlay;

use Encore\Admin\Extension;

class LaravelAdminLoadingOverlay extends Extension
{
    public $name = 'laravel-admin-loading-overlay';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Laraveladminloadingoverlay',
        'path'  => 'laravel-admin-loading-overlay',
        'icon'  => 'fa-gears',
    ];
}