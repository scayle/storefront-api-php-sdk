<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $key 
 * @property WishlistItem[] $items 
 */
class Wishlist extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'items' => \Scayle\StorefrontApi\Models\WishlistItem::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}