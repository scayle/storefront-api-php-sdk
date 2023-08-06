<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $categoryId Unique identifier of the category
 * @property string $categoryName Name of the category
 * @property int $categoryParentId Parent ID of the category
 * @property string $categoryPath Category path as text
 */
class BaseCategory extends ApiObject
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