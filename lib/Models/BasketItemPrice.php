<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Price $total 
 * @property Price $unit 
 */
class BasketItemPrice extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'total' => \Scayle\StorefrontApi\Models\Price::class,
		'unit' => \Scayle\StorefrontApi\Models\Price::class,
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