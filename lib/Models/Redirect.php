<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id The unique identifier of the redirect
 * @property string $source The source URL for the redirect
 * @property string $target The target URL for the redirect
 * @property int $statusCode The the status code for the redirect
 */
class Redirect extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}