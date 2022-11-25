<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property Category $parent 
 * @property CategoryChild[] $children 
 * @property int[] $childrenIds 
 * @property int $depth 
 * @property string $description 
 * @property bool $isHidden 
 * @property string $name 
 * @property int $parentId 
 * @property string $path 
 * @property array[] $properties 
 * @property int[] $rootlineIds 
 * @property string $slug short text to describe the current category (usable, for example, in URLs as `fashion`).
 * @property string[] $supportedFilter 
 */
class CategoryChild extends ApiObject
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