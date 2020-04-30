# Installation

To install Laravel Friendships you need to make sure you have at least PHP version `7.1.3` and at least Laravel Framework `5.8.x` or above.

1. Install this package through composer.
```sh
composer require demency/laravel-friendships
```

2. Add the service provider to your app config.
```php
<?php

return [

    // ...

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        
        // Laravel Service Providers
        
        Demency\Friendships\FriendshipsServiceProvider::class,
        
        // Application Service Providers
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
