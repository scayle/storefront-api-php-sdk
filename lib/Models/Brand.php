<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id The unique identifier of the brand (referred as `attributeId`), can be used for retrieving specific brand. ID which would be used to filter for brands in the `products` and `filters` endpoint
 * @property string $slug short text to describe the current category (usable, for example, in URLs as `fashion`).
 * @property string $name 
 * @property array $customData Arbitrary custom data object to be added to the brand.
 * @property string $externalReference External reference set by the client to integrate a third-party party system.
 * @property string $group Brand group.
 * @property bool $isActive Whether the brand is currently active or not.
 * @property string $logoHash Logo hash used for generating the full url.
 * @property Timestamp $createdAt Date string of creation, formatted according to RFC 3339.
 * @property Timestamp $updatedAt Date string of last update, formatted according to RFC 3339.
 * @property Timestamp $indexedAt Date string of last update, formatted according to RFC 3339.
 */
class Brand extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'customData' => \Scayle\StorefrontApi\Models\CustomData::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}