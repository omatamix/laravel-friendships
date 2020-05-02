[![Laravel Friendships](https://github.com/demency/laravel-friendships/workflows/Laravel%20Friendships/badge.svg)](https://github.com/demency/laravel-friendships/actions?query=workflow%3A%22Laravel+Friendships%22)
[![codecov](https://codecov.io/gh/demency/laravel-friendships/branch/master/graph/badge.svg)](https://codecov.io/gh/demency/laravel-friendships)
[![Code Climate](https://codeclimate.com/github/demency/laravel-friendships/badges/gpa.svg)](https://codeclimate.com/github/demency/laravel-friendships)
[![Test Coverage](https://codeclimate.com/github/demency/laravel-friendships/badges/coverage.svg)](https://codeclimate.com/github/demency/laravel-friendships/coverage)
[![Total Downloads](https://poser.pugx.org/demency/laravel-friendships/downloads)](https://packagist.org/packages/demency/laravel-friendships)
[![Latest Stable Version](https://poser.pugx.org/demency/laravel-friendships/v/stable)](https://packagist.org/packages/demency/laravel-friendships)
[![License](https://poser.pugx.org/demency/laravel-friendships/license)](https://packagist.org/packages/demency/laravel-friendships)

# Installation

To install Laravel Friendships you need to make sure you have at least PHP version `7.1.3` and at least Laravel Framework `5.8.x` or above.

1. Install this package through composer.

```sh
composer require demency/laravel-friendships
```

2. Autoload the service provider in your app configuration.

```php
return [
    'providers' => [
        Demency\Friendships\FriendshipsServiceProvider::class,
    ]
]
```

3. Publish the service providers migrations and configuration files to your Laravel application.

```sh
php artisan vendor:publish --provider="Demency\Friendships\FriendshipsServiceProvider"
```

4. Migrate your database to add the published tables to your database.

```sh
php artisan migrate
```

After that, you have successfully installed Laravel Friendships.
