<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $key 
 * @property string $value 
 * @property string $pricePromotionKey Adjust variant price based on the specified `pricePromotionKey`. If the variant does not have a matching price promotion, the default price is returned.
 */
class CustomData extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
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