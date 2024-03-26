# This is my package filament-log-viewer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/egyjs/filament-log-viewer.svg?style=flat-square)](https://packagist.org/packages/egyjs/filament-log-viewer)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/egyjs/filament-log-viewer/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/egyjs/filament-log-viewer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/egyjs/filament-log-viewer/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/egyjs/filament-log-viewer/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/egyjs/filament-log-viewer.svg?style=flat-square)](https://packagist.org/packages/egyjs/filament-log-viewer)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require egyjs/filament-log-viewer
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-log-viewer-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-log-viewer-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-log-viewer-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentLogViewer = new Egyjs\FilamentLogViewer();
echo $filamentLogViewer->echoPhrase('Hello, Egyjs!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [egyjs](https://github.com/egyjs)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
