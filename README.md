# Flip business API integration using Saloon PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zikraauliya/flip-connector.svg?style=flat-square)](https://packagist.org/packages/zikraauliya/flip-connector)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/zikraauliya/flip-connector/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/zikraauliya/flip-connector/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/zikraauliya/flip-connector/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/zikraauliya/flip-connector/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zikraauliya/flip-connector.svg?style=flat-square)](https://packagist.org/packages/zikraauliya/flip-connector)

This is an unofficial package that I use for my own personal project, so this package is highly opiniated. You can still use this for your own project at your own risk or fork it as inspiration.

<!-- ## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/flip-connector.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/flip-connector)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards). -->

## Installation

You can install the package via composer:

```bash
composer require zikraauliya/flip-connector
```

<!-- You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="flip-connector-migrations"
php artisan migrate
``` -->

You can publish the config file with:

```bash
php artisan vendor:publish --tag="flip-connector-config"
```

This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |
    | This value is the secret key found in your Flip Business account. This value is used when the
    | package needs to generate a base64 encoded encryption for Flip Business authorization.
    |
    */
    'secret_key' => env('FLIP_SECRET_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | This value is determines the enviroment of Flip Business API endpoint. It's either 'sandbox'
    | for testing or 'production' for real live integration, default value is 'sandbox'.
    |
    */
    'env' => env('FLIP_ENV', 'sandbox'),

    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |
    | This value is the secret key found in your Flip Business account. This value is used when the
    | package needs to generate a base64 encoded encryption for Flip Business authorization.
    |
    */
    'secret_key' => env('FLIP_SECRET_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | This value is determines the enviroment of Flip Business API endpoint. Available options are 'big_sandbox_api'
    | for testing, 'kyc' (Know-Your-Client) for Non-PJP Agent Money Transfer  or 'api' for live production integration,
    | default value is 'big_sandbox_api'.
    |
    */
    'env' => env('FLIP_ENV', 'big_sandbox_api'),

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | This value is the base URL of Flip Business API endpoint. This value is based on env('FLIP_ENV').
    |
    */
    'base_url' => 'https://bigflip.id/' . env('FLIP_ENV'),

    /*
    |--------------------------------------------------------------------------
    | Validation Token
    |--------------------------------------------------------------------------
    |
    | This value is the validation token found in your Flip Business account. This value is used when
    | we need to ensure whether the callback is actually from Flip server.
    |
    */
    'validation_token' => env('FLIP_VALIDATION_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Private Key
    |--------------------------------------------------------------------------
    |
    | This value is the private section of public/private key ssh pair.
    | In this example we're storing private key in .ENV file, you can store it however you want.
    | In production environment you're highly recommended to store it as safe as possible.
    |
    */
    'private_key' => env('SSH_PRIVATE_KEY'),
];
```

## Usage

```php
$flipConnector = new ZikraAuliya\FlipConnector();
$request = new GetBankInfoRequest;
$response = $flip->send($request);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Zikra Auliya](https://github.com/zikraauliya)
- [Flip ID](https://github.com/flip-id)
- [Saloon PHP](https://github.com/saloonphp)
- [Helge Sverre](https://github.com/HelgeSverre)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
