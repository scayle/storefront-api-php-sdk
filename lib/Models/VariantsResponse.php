<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Variant[] $entities 
 * @property Pagination $pagination 
 */
class VariantsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'pagination' => \Scayle\StorefrontApi\Models\Pagination::class,
    ];

    protected $collectionClassMap = [
        'entities' => \Scayle\StorefrontApi\Models\Variant::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}