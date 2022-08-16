# WP Hooks

An implementation that doesn't give you anger management issues.

## Getting started

## Prerequisites

* php: `^8.0|^8.1`
* Composer `^2.3` (preferred)

### Installation

```shell
composer require jascha030/wp-hooks
```

## Usage

Extensive instructions in how to use your package in general or for use in the development of other projects.

### Testing

Included with the package are a set of Unit tests using `phpunit/phpunit`. For ease of use a composer script command is
defined to run the tests.

```shell
composer run test
```

Or simply:

```shell
composer test
```

### Code style & Formatting

A code style configuration for `friendsofphp/php-cs-fixer` is included, defined in `.php-cs-fixer.dist.php`. By default,
it includes the `PSR-1` and `PSR-12` presets. You can customize or add rules in `.php-cs-fixer.dist.php`.

To use php-cs-fixer without having it necessarily installed globally, a composer script command is also included to
format php code using the provided config file and the vendor binary of php-cs-fixer.

```shell
composer run format
```

Or simply:

```shell
composer format
```

> **Note:** [https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0](https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0)
is a nifty tool to compose and export a custom code style configuration, I encourage anyone interested to use this tool.

## Inspiration and appreciation

...

## License

This composer package is an open-sourced software licensed under
the [MIT License](https://github.com/jascha030/composer-template/blob/master/LICENSE.md)
