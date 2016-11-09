<?php

namespace PendoNL\LaravelFontAwesome;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelFontAwesomeServiceProvider
 * @package PendoNL\LaravelFontAwesome
 */
class LaravelFontAwesomeServiceProvider extends ServiceProvider
{
    /**
     * Boot method registers the blade directive.
     * Usage; @fa('list', ['attributes' => 'go here'])
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('fa', function($arguments) {
            list($icon, $attributes) = explode(',', str_replace(['(',')',' ', "'"], '', $arguments), 2);

            $options = [];

            if($attributes != "")
            {
                $rawAttributes = str_replace(['array(', '[', ']', ')'], "", $attributes);
                $arrAttributes = explode(",", $rawAttributes);

                if(count($arrAttributes) > 0)
                {
                    foreach($arrAttributes as $string)
                    {
                        $attr = explode("=>", $string);
                        $options[$attr[0]] = $attr[1];
                    }
                }
            }

            return (new LaravelFontAwesome)->icon($icon, $options);
        });
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
