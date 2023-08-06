<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Brand[] $entities 
 * @property Pagination|OffsetPagination $pagination 
 */
class BrandsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'entities' => \Scayle\StorefrontApi\Models\Brand::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}