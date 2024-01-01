# Filament Intl

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marvinrabe/filament-intl.svg?style=flat-square)](https://packagist.org/packages/marvinrabe/filament-intl)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/marvinrabe/filament-intl/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/marvinrabe/filament-intl/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/marvinrabe/filament-intl/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/marvinrabe/filament-intl/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marvinrabe/filament-intl.svg?style=flat-square)](https://packagist.org/packages/marvinrabe/filament-intl)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require marvinrabe/filament-intl
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-intl-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-intl-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-intl-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentIntl = new MarvinRabe\FilamentIntl();
echo $filamentIntl->echoPhrase('Hello, MarvinRabe!');
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

- [Marvin Rabe](https://github.com/marvinrabe)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
