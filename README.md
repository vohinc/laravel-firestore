# Laravel Firestore

The Google firestore wrapper for Laravel.

## Requirement

* Laravel 5.8.*
* [gRPC extension](https://cloud.google.com/php/grpc)

## Install
```shell
composer require vohinc/laravel-firestore
```

## Publish Configuration
```shell
php artisan vendor:publish --provider=Voh\LaravelFirestore\FirestoreServiceProvider --tag=config
```

## Usage

```php
use Voh\LaravelFirestore\Facades\Firestore;

Firestore::collection('users')->document('lovelace')->set([
    'first' => 'Ada',
    'last' => 'Lovelace',
    'born' => 1815,
]);
```
