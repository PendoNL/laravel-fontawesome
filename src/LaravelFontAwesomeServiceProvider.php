<?php

namespace PendoNL\LaravelFontAwesome;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelFontAwesomeServiceProvider.
 */
class LaravelFontAwesomeServiceProvider extends ServiceProvider
{
    /**
     * Boot method registers the blade directive.
     * Usage; @fa('list', ['attributes' => 'go here']).
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('fa', function ($expression) {
            return "<?php echo FontAwesome::icon({$expression}); ?>";
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
