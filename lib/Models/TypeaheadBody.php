<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $fuzziness The fuzziness parameter can enable some typo tolerance. Available values are 0, 1, 2, and auto. Defaults to auto. Note: The value set in the SCAYLE  Panel will not impact this search.
 * @property SizeItem[] $sizes It accepts an array of objects with the keys `shopSizeRun` and `categoryShopFilterSizes`, which can boost results by the matching attribute "shopSizeRun". It can contain `BrandOrCategory` and `ProductSuggestions` as suggestions.
 * @property int[] $likedBrands The `likedBrands` parameter can boost and adjust results by matching the given brand IDs.
 * @property int $categoryId The `categoryId` parameter can filter by category ID.
 * @property int $limit The `limit` parameter allows limiting the number of suggested products returned.
 * @property string $term The `term` parameter allows you to query for any entity with a full or partial match with the given term.
 */
class TypeaheadBody extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'sizes' => \Scayle\StorefrontApi\Models\SizeItem::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}