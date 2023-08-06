<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property Vat $vat 
 */
class Tax extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'vat' => \Scayle\StorefrontApi\Models\Vat::class,
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