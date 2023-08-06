<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Product[] $entities 
 * @property Pagination|OffsetPagination $pagination 
 */
class ProductsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'entities' => \Scayle\StorefrontApi\Models\Product::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}