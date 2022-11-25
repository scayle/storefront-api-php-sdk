<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Product $product 
 * @property float $score 
 * @property string $type 
 */
class ProductSuggestion extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'product' => \Scayle\StorefrontApi\Models\Product::class,
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