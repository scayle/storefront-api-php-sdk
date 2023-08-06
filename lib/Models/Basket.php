<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $key 
 * @property BasketItem[] $items 
 * @property Price $cost 
 * @property Package[] $packages 
 */
class Basket extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'cost' => \Scayle\StorefrontApi\Models\Price::class,
    ];

    protected $collectionClassMap = [
        'items' => \Scayle\StorefrontApi\Models\BasketItem::class,
        'packages' => \Scayle\StorefrontApi\Models\Package::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}