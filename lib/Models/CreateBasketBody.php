<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property array $customData For each item, you can add an additional custom data array. This will not change the API behavior. The data will remain attached to the basket item and you may retrieve it at any time during or after the checkout and order process.

 * @property array $displayData Custom basket item properties for display during SCAYLE  checkout and order process can be set with displayData.
 * @property int $quantity The quantity for the variant.

 * @property int $shopId If you are operating multiple shops (for example, for different domain names or different languages), each shop is identified by its specific `shopId`.

 * @property int $variantId The variant to be added to the basket. This is the only required parameter.
 * @property array $itemGroup 
 */
class CreateBasketBody extends ApiObject
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