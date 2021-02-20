# Dev Helper

Package description: Simple artisan commands to help development

## Installation

Install via composer
```bash
composer require --dev kkobold/dev-helper
```

### Publish package assets

```bash
php artisan vendor:publish --provider="Kkobold\DevHelper\ServiceProvider"
```

## Usage

```bash
php artisan dev:clear # clear stuff
php artisan dev:helper # generate ide helper 
```

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [Danilo Sabbagh](https://github.com/kkobold/dev-helper)
- [All contributors](https://github.com/kkobold/dev-helper/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
