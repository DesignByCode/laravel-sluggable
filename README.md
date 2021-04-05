# Laravel Sluggable

[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/laravel-sluggable.svg?style=flat-square)](https://packagist.org/packages/designbycode/laravel-sluggable)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/designbycode/laravel-sluggable/run-tests?label=tests)](https://github.com/designbycode/laravel-sluggable/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/designbycode/laravel-sluggable/Check%20&%20fix%20styling?label=code%20style)](https://github.com/designbycode/laravel-sluggable/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/laravel-sluggable.svg?style=flat-square)](https://packagist.org/packages/designbycode/laravel-sluggable)

Addes sluggable trait to laravel models to genarate slugs for your titles


* [Installation](#installation)
* [How to use sluggable](#usage)
* [Testing](#testing)


## Installation

You can install the package via composer:

```bash
composer require designbycode/laravel-sluggable
```



## Usage

```php
use DesignByCode\Sluggable\Sluggable;

class Post extends \Illuminate\Database\Eloquent\Model{
    use Sluggable;
    
    public function slugFrom() : string{
        return 'title';
    }
}
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

- [Claude Myburgh](https://github.com/designbycode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
