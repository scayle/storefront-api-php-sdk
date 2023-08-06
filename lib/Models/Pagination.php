<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $current 
 * @property int $first 
 * @property int $last 
 * @property int $next 
 * @property int $page 
 * @property int $perPage 
 * @property int $prev 
 * @property int $total 
 */
class Pagination extends ApiObject
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