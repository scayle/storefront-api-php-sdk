<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property array<string, AdvancedAttribute> $advancedAttributes 
 * @property array<string, Attribute> $attributes 
 * @property BaseCategory[] $baseCategories 
 * @property ProductCategory[] $categories 
 * @property DefiningAttribute $definingAttributes 
 * @property Image[] $images 
 * @property array<string, CustomData> $customData 
 * @property bool $isActive Identifies whether a product is active or not
 * @property bool $isNew Identifies whether a product is new or not
 * @property bool $isSoldOut Identifies if a product is still available to sell
 * @property string $masterKey Identifies the master product which this product belongs
 * @property string $firstLiveAt Identifies the first time one of the products variants went live
 * @property array $pricePromotionInfo 
 * @property PriceRange $priceRange 
 * @property ReductionRange $reductionRange 
 * @property LowestPriorPrice $lowestPriorPrice 
 * @property string $referenceKey 
 * @property int[] $searchCategoryIds 
 * @property Product[] $siblings list of Products
 * @property Variant[] $variants 
 * @property Timestamp $createdAt 
 * @property Timestamp $updatedAt 
 * @property Timestamp $indexedAt 
 */
class Product extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'definingAttributes' => \Scayle\StorefrontApi\Models\DefiningAttribute::class,
		'priceRange' => \Scayle\StorefrontApi\Models\PriceRange::class,
		'reductionRange' => \Scayle\StorefrontApi\Models\ReductionRange::class,
		'lowestPriorPrice' => \Scayle\StorefrontApi\Models\LowestPriorPrice::class,
    ];

    protected $collectionClassMap = [
        'attributes' => \Scayle\StorefrontApi\Models\Attribute::class,
        'advancedAttributes' => \Scayle\StorefrontApi\Models\AdvancedAttribute::class,
        'images' => \Scayle\StorefrontApi\Models\Image::class,
        'siblings' => \Scayle\StorefrontApi\Models\Product::class,
        'baseCategories' => \Scayle\StorefrontApi\Models\BaseCategory::class,
        'variants' => \Scayle\StorefrontApi\Models\Variant::class,
    ];

    protected $collection2dClassMap = [
            'categories' => \Scayle\StorefrontApi\Models\ProductCategory::class,
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}