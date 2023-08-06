<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $key 
 * @property int $packageId 
 * @property int $quantity 
 * @property string $status 
 * @property Product $product 
 * @property Variant $variant 
 * @property string $productId 
 * @property string $masterKey 
 * @property string $variantId 
 * @property array<string, CustomData> $customData 
 */
class WishlistItem extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'product' => \Scayle\StorefrontApi\Models\Product::class,
		'variant' => \Scayle\StorefrontApi\Models\Variant::class,
		'customData' => \Scayle\StorefrontApi\Models\CustomData::class,
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