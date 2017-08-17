# TrafficLogger

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel package that will log certain traffic data to a MySQL database. This package relies on the Eloquent ORM which 
is included with Laravel.

## Install

Via Composer

``` bash
$ composer require AmyLashley\TrafficLogger
```
Publish config and migration to your app:
```
php artisan vendor:publish --provider="AmyLashley\TrafficLogger\App\Providers\TrafficLoggerServiceProvider"
```

Migrate the database.
You can change the database table that the logger users by update the table-name variable in the trafficlog.php config file.
```
php artisan migrate
``` 

Add Middleware to your `app\Http\Kernel.php` in the global middleware array:
```
\AmyLashley\TrafficLogger\App\Http\Middleware\LogRequest::class,
```


## Usage

After installation, there is not much more you'll need to do. If you'd like to change the name of the database table that you're using, you can set that in trafficlog.php.

You can view your traffic reports at /admin/traffic-logger/report

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email alashley@amherst.edu instead of using the issue tracker.

## Credits

- [Amy Lashley][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/amylashley
[link-contributors]: ../../contributors
