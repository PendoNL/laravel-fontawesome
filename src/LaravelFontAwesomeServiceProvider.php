<?php

namespace PendoNL\LaravelFontAwesome;

use Illumate\Support\ServiceProvider;

/**
 * Class LaravelFontAwesomeServiceProvider
 * @package PendoNL\LaravelFontAwesome
 */
class LaravelFontAwesomeServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel-font-awesome', 'PendoNL\LaravelFontAwesome\LaravelFontAwesome');
    }
}