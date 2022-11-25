<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property array $deliveryForecast 
 * @property bool $isSellableWithoutStock 
 * @property int $quantity 
 * @property int $warehouseId 
 * @property int $supplierId 
 */
class Stock extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'customData' => \Scayle\StorefrontApi\Models\CustomData::class,
		'deliveryForecast' => \Scayle\StorefrontApi\Models\DeliveryForecast::class,
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