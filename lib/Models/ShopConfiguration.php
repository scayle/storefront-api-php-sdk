<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $shopId 
 * @property string $name 
 * @property array<string, CustomData> $shopCustomData 
 * @property ShopProperties[] $properties 
 * @property array<string, CustomData> $customData 
 * @property string $country 
 */
class ShopConfiguration extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'customData' => \Scayle\StorefrontApi\Models\CustomData::class,
    ];

    protected $collectionClassMap = [
        'properties' => \Scayle\StorefrontApi\Models\ShopProperties::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}