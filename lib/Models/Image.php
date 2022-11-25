<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property array<string, Attribute> $attributes 
 * @property string $hash 
 */
class Image extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'attributes' => \Scayle\StorefrontApi\Models\Attribute::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}