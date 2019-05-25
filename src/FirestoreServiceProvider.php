<?php

namespace Voh\LaravelFirestore;

use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Support\ServiceProvider;
use Voh\LaravelFirestore\Facades\Firestore;

/**
 * Class FirestoreServiceProvider
 *
 * @package Voh\LaravelFirestore
 */
class FirestoreServiceProvider extends ServiceProvider
{
    /**
     * Config path
     *
     * @var string
     */
    private $configPath =  __DIR__.'/../config/laravel-firestore.php';

    /**
     *
     */
    public function boot(): void
    {
        $this->registerPublishing();
    }

    /**
     *
     */
    private function registerPublishing(): void
    {
        $this->publishes([$this->configPath => config_path('laravel-firestore.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath, 'laravel-firestore');
        $this->app->singleton('laravel-firestore', function () {
            return new FirestoreClient([
                'keyFilePath' => config('laravel-firestore.json'),
            ]);
        });
    }
}
