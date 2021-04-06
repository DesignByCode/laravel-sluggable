# Laravel Sluggable


[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/laravel-sluggable.svg?style=plastic)](https://packagist.org/packages/designbycode/laravel-sluggable)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/designbycode/laravel-sluggable?style=plastic)
[![Check & fix styling](https://github.com/DesignByCode/laravel-sluggable/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/DesignByCode/laravel-sluggable/actions/workflows/php-cs-fixer.yml)
[![Psalm](https://github.com/DesignByCode/laravel-sluggable/actions/workflows/psalm.yml/badge.svg)](https://github.com/DesignByCode/laravel-sluggable/actions/workflows/psalm.yml)
[![run-tests](https://github.com/DesignByCode/laravel-sluggable/actions/workflows/run-tests.yml/badge.svg)](https://github.com/DesignByCode/laravel-sluggable/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/laravel-sluggable.svg?style=plastic)](https://packagist.org/packages/designbycode/laravel-sluggable)

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
