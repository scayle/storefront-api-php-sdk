<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Cost $cost 
 * @property array[] $items 
 */
class BasketItem extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'customData' => \Scayle\StorefrontApi\Models\CustomData::class,
		'deliveryForecast' => \Scayle\StorefrontApi\Models\DeliveryForecast::class,
		'displayData' => \Scayle\StorefrontApi\Models\DisplayData::class,
		'price' => \Scayle\StorefrontApi\Models\BasketItemPrice::class,
		'product' => \Scayle\StorefrontApi\Models\Product::class,
		'variant' => \Scayle\StorefrontApi\Models\Variant::class,
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