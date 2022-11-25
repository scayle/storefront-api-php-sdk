<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $key Reference that identifies the attribute
 * @property string $label The locale is defined by the configuration of the shop associated with the authentication token. [Translations](../../../en/next/manual/scayle/product-translations) of the individual attributes are maintained in the SCAYLE Panel.
 * @property bool $multiSelect A flag which determines whether an attribute has a single or possibly multiple values.
 * @property string $type Attribute type
 * @property AttributeValue[] $values If 'multiSelect' is 'true', this is an 'object' ('{ id? number, label? string, value? string }'), if 'multiSelect' is 'false' this is an array of objects.
 */
class Attribute extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'values' => \Scayle\StorefrontApi\Models\AttributeValue::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}