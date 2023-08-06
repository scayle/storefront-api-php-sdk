<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $variantId Variant ID to add to the wishlist.
 * @property int $productId Product ID to add to the wishlist. When provided, the first found in-stock variant of the product will be added.
 * @property array $customData `customData ` allows you to attach data to an item. The data will remain attached to the item from the basket through the process of order creation and delegation and may be displayed to the customer during the order lifecycle.

 * @property int $shopId Identifier of the shop that usually refers to the child shop. In case it is missing, the request will assume the same app ID is used during the authentication.
 */
class CreateWishlistBody extends ApiObject
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