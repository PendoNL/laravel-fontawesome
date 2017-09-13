# FontAwesome helper and blade directive for Laravel

[![Latest version on Packagist](https://img.shields.io/packagist/v/pendonl/laravel-fontawesome.svg?style=flat-square)](https://packagist.org/packages/pendonl/laravel-fontawesome)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Travis branch](https://img.shields.io/travis/PendoNL/laravel-fontawesome/master.svg)](https://travis-ci.org/PendoNL/laravel-fontawesome)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/PendoNL/laravel-fontawesome.svg)](https://scrutinizer-ci.com/g/PendoNL/laravel-fontawesome/)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/e660c560-9d50-43e3-9be1-e556ba78f189.svg)](https://insight.sensiolabs.com/projects/e660c560-9d50-43e3-9be1-e556ba78f189)
[![Style Ci](https://styleci.io/repos/73300601/shield)](https://styleci.io/repos/73300601/)
[![Total Downloads](https://img.shields.io/packagist/dt/pendonl/laravel-fontawesome.svg?style=flat-square)](https://packagist.org/packages/pendonl/laravel-fontawesome)

The `PendoNL/laravel-fontawesome` package provides an easy way to include FontAwesome icons in your code, there's even a Blade directive to use them inside your blade templates. 

## Usage

Make sure you've loaded FontAwesome's CSS on your page! This package only providers little helpers to generate icons!

You can use the Facade to generate icons from within your code:

```php
FontAwesome::icon('arrow-up');
// Generates <i class="fa fa-arrow-up"></i>
```

It's also possible to add optional attributes for the icon:

```php
FontAwesome::icon('arrow-up', ['class' => 'tiny', 'id' => 'MyFirstIcon']);
// Generates <i class="fa fa-arrow-up tiny" id="MyFirstIcon"></i>
```

If you aren't using the Facade, this is the way to generate an icon:

```php
use PendoNL\LaravelFontAwesome\LaravelFontAwesome;

$fa = new LaravelFontAwesome();
$icon = $fa->icon('arrow-up', ['class' => 'tiny', 'id' => 'MyFirstIcon']);
```

And last, but not least, you there'a a blade directive to use inside your blade templates:

```code
@fa('arrow-up');
@fa('arrow-up', ['class' => 'tiny', 'id' => 'MyFirstIcon']);
```

Using the Facade from within your templates work as well:

```code
{!! FontAwesome::icon('building') !!}
{!! FontAwesome::icon('building', ['id' => 'building-icon']) !}}
```

## Installation

You can install the package via composer:

``` bash
composer require pendonl/laravel-fontawesome
```

Next, you must install the service provider (For L5.5 and up Auto-Discovery is enabled):

```php
// config/app.php
'providers' => [
    ...
    PendoNL\LaravelFontAwesome\LaravelFontAwesomeServiceProvider::class,
];
```

Optionally, register the facade:

```php
// config/app.php
'aliases' => [
    ...
    'FontAwesome' => PendoNL\LaravelFontAwesome\Facade::class,
];
```

## Security

If you discover any security related issues, please email joshua@pendo.nl instead of using the issue tracker.

## Credits

It was incredible helpfull to view various packages of Spatie to get to this final version. Aswel as `lucasruroken/laravel-font-awesome` which I spotted and was the main reason to start creating my first package ever. Thanks both for open sourcing your packages! I also tried to write down this first experience on my companies blog, comments appreciated!

- [Spatie](https://github.com/spatie)
- [LucasRuroken/laravel-font-awesome](https://github.com/lucasruroken/laravel-font-awesome)
- [Blog about my first open-source experience](https://pendo.nl/blog/webdevelopment/fontawesome-for-laravel)

## About Pendo
Pendo is a webdevelopment agency based in Maastricht, Netherlands. If you'd like, you can [visit our website](https://pendo.nl).

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
