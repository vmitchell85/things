# A Things 3 package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vmitchell85/things.svg?style=flat-square)](https://packagist.org/packages/vmitchell85/things)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vmitchell85/things/run-tests?label=tests)](https://github.com/vmitchell85/things/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/vmitchell85/things/Check%20&%20fix%20styling?label=code%20style)](https://github.com/vmitchell85/things/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/vmitchell85/things.svg?style=flat-square)](https://packagist.org/packages/vmitchell85/things)

This is package to interact with the Things 3 SQLite database.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-things-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-things-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require vmitchell85/things
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Vmitchell85\Things\ThingsServiceProvider" --tag="things-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Vmitchell85\Things\ThingsServiceProvider" --tag="things-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$things = new Vmitchell85\Things();
echo $things->echoPhrase('Hello, Spatie!');
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

- [Vince Mitchell](https://github.com/vmitchell85)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
