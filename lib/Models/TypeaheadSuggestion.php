<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property BrandOrCategorySuggestion $brandOrCategorySuggestion 
 * @property float $score 
 * @property string $type 
 */
class TypeaheadSuggestion extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'brandOrCategorySuggestion' => \Scayle\StorefrontApi\Models\BrandOrCategorySuggestion::class,
		'productSuggestion' => \Scayle\StorefrontApi\Models\ProductSuggestion::class,
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