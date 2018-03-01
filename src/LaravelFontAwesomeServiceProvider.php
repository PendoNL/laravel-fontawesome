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
        $this->publishes([
            __DIR__.'/../publish/config/laravel-fontawesome.php' => config_path('laravel-fontawesome.php'),
        ], 'config');

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
        $packageConfigFile = __DIR__.'/../publish/config/laravel-fontawesome.php';

        $this->mergeConfigFrom(
            $packageConfigFile, 'laravel-fontawesome'
        );

        $this->app->singleton('laravel-font-awesome', 'PendoNL\LaravelFontAwesome\LaravelFontAwesome');
    }
}
