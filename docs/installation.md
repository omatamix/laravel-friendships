# Installation

To install Laravel Friendships you need to make sure you have at least PHP version `7.1.3` and at least Laravel Framework `5.8.x` or above.

1. Install this package through composer.
```sh
composer require demency/laravel-friendships
```

2. Autoload the service provider in your app configuration by placing `Demency\Friendships\FriendshipsServiceProvider::class` in the providers array.

3. Publish the service providers migrations and configuration files to your Laravel application.
```sh
php artisan vendor:publish --provider="Demency\Friendships\FriendshipsServiceProvider"
```

4. Migrate your database to add the published tables to your database.
```sh
php artisan migrate
```
