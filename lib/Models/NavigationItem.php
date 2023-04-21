<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string[] $assets 
 * @property string $name 
 * @property string $type 
 * @property string $visibleFrom 
 * @property string $visibleTo 
 * @property array $options 
 * @property NavigationItemExtraFilter $extraFilters 
 * @property array<string, Category> $category 
 * @property NavigationItem[] $children 
 */
class NavigationItem extends ApiObject
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