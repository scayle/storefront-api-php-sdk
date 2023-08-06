<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property array[] $attributeFilters 
 * @property array $brand 
 * @property Category $category 
 * @property string $primaryMatch 
 * @property int $productCount 
 * @property string $suggestion 
 */
class BrandOrCategorySuggestion extends ApiObject
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