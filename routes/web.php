<?php

use Wuwx\LaravelAdminLoadingOverlay\Http\Controllers\LaravelAdminLoadingOverlayController;

Route::get('laravel-admin-loading-overlay', LaravelAdminLoadingOverlayController::class.'@index');