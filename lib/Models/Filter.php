<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $name 
 * @property string $slug short text to describe the current category (usable, for example, in URLs as `fashion`).
 * @property string $attributeGroupType 
 * @property string $type 
 * @property FilterValues $values 
 */
class Filter extends ApiObject
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