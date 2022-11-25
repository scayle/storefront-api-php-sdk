<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $carrierKey 
 * @property DeliveryDate $deliveryDate 
 */
class Package extends ApiObject
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