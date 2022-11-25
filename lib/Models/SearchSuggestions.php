<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property AttributeValue[] $brands 
 * @property Category[] $categories 
 * @property ProductName[] $productNames 
 * @property Product[] $products 
 */
class SearchSuggestions extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'brands' => \Scayle\StorefrontApi\Models\AttributeValue::class,
        'categories' => \Scayle\StorefrontApi\Models\Category::class,
        'productNames' => \Scayle\StorefrontApi\Models\ProductName::class,
        'products' => \Scayle\StorefrontApi\Models\Product::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}