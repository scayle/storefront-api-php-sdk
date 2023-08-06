<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property AppliedReduction[] $appliedReductions 
 * @property string $currencyCode The currency of the price.
 * @property int $withoutTax 
 * @property int $withTax 
 */
class Cost extends ApiObject
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