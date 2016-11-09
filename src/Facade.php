<?php

namespace PendoNL\LaravelFontAwesome;

/**
 * Class Facade.
 *
 * @method static string icon(string $icon, array $options = [])
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-font-awesome';
    }
}
