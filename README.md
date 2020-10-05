# Customize UI README
This package allows customizing UI in Admin interface for Bagisto.
## Features
- Custom back button in admin interface of bagisto
- Create back button component
## Requirements
- [Bagisto](https://github.com/bagisto/bagisto)

## Installation

### Install with package folder
1. Unzip all the files to **packages/GGPHP/UI**.
2. Open `config/app.php` and add **GGPHP\UI\Providers\UIServiceProvider::class**.
3. Open `composer.json` and add **"GGPHP\\UI\\": "packages/GGPHP/UI/src"** to **psr-4**.
4. Run the following command
```php
composer dump-autoload
```

```php
php artisan vendor:publish --all
```

## Guide

### Use back button component
- Add `<back-button baseUrl="{{ $baseUrl }}"></back-button>` to blade file you need, `$baseUrl` is root url.
- Run the following command
```php
php artisan vendor:publish --all
```
