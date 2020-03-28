<?php

namespace Wuwx\LaravelAdminLoadingOverlay\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class LaravelAdminLoadingOverlayController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('laravel-admin-loading-overlay::index'));
    }
}