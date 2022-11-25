<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property AppliedReduction[] $appliedReductions 
 * @property string $currencyCode The currency of the price.
 * @property array $reference 
 * @property array $tax 
 * @property int $withoutTax 
 * @property int $withTax 
 * @property int $recommendedRetailPrice 
 */
class Price extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'tax' => \Scayle\StorefrontApi\Models\Tax::class,
    ];

    protected $collectionClassMap = [
        'appliedReductions' => \Scayle\StorefrontApi\Models\AppliedReduction::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}