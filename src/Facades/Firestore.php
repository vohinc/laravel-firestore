<?php

namespace Voh\LaravelFirestore\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Firestore
 */
class Firestore extends Facade
{
    /**
     * @see \Google\Cloud\Firestore\FirestoreClient
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-firestore';
    }
}
