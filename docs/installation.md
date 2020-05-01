### Table of contents
1. [Introduction](#introduction)
2. [Some paragraph](#paragraph1)
    1. [Sub paragraph](#subparagraph1)
3. [Another paragraph](#paragraph2)

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
