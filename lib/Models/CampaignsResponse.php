<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Pagination $pagination 
 * @property Campaign[] $entities 
 */
class CampaignsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'pagination' => \Scayle\StorefrontApi\Models\Pagination::class,
    ];

    protected $collectionClassMap = [
        'entities' => \Scayle\StorefrontApi\Models\Campaign::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}