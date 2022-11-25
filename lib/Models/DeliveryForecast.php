<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Deliverable $deliverable 
 * @property SubsequentDelivery $subsequentDelivery 
 */
class DeliveryForecast extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'deliverable' => \Scayle\StorefrontApi\Models\Deliverable::class,
		'subsequentDelivery' => \Scayle\StorefrontApi\Models\SubsequentDelivery::class,
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