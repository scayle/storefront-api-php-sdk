<?php

namespace Scayle\StorefrontApi\Models;

/**
 */
class Packages extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'deliveryDate' => \Scayle\StorefrontApi\Models\DeliveryDate::class,
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