<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id Unique identifier of the category.
 * @property Category $parent Parent category, if existent and requested, using `with`.
 * @property Category[] $children Array of child category objects, if requested, using `with`.
The childrenIds are always included.Array of child category objects, if requested, using with.
The `childrenIds` are always included.

 * @property int[] $childrenIds child category IDs attached to the current category
 * @property int $depth nesting level of the category (root-level depth = 1, child nodes = 2, child nodes' children = 3, etc.)
 * @property bool $isHidden The category should not be shown in the front end if this is set to `true`.
 * @property string $name the name of the category
 * @property int $parentId parent category ID (root-level categories have a parent ID of `0`)
 * @property string $path slugs for all `rootlineIds` combined with `/` (e.g., `/women/fashion`).
 * @property array[] $properties Properties attached to this category.
 * @property int[] $rootlineIds Contains the IDs for the path from the topmost root category to the current category, which is included as the last item.
 * @property string $slug Generated slug for the category, a short text to describe the current category (usable, for example, in URLs as `fashion`).
 * @property string[] $supportedFilter a list of filters that can be used for filtering products in the category (for example, `armLength` or `mainMaterial`)
 * @property array $shopLevelCustomData 
 * @property array $countryLevelCustomData 
 */
class Category extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'parent' => \Scayle\StorefrontApi\Models\Category::class,
    ];

    protected $collectionClassMap = [
        'children' => \Scayle\StorefrontApi\Models\Category::class,
        'properties' => \Scayle\StorefrontApi\Models\CategoryProperty::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}