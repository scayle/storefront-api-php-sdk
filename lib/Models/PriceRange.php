<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Price $max 
 * @property Price $min 
 */
class PriceRange extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'max' => \Scayle\StorefrontApi\Models\Price::class,
		'min' => \Scayle\StorefrontApi\Models\Price::class,
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