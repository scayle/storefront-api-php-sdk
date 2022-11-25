<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class ProductTest extends BaseApiTestCase
{
    public function testGetById()
    {
        $responseEntity = $this->api->products->GetById('1',  []);

        $expectedResponseJson = $this->loadFixture('ProductGetByIdResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Product::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'attributes', \Scayle\StorefrontApi\Models\Attribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'advancedAttributes', \Scayle\StorefrontApi\Models\AdvancedAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'categories', \Scayle\StorefrontApi\Models\ProductCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'definingAttributes', \Scayle\StorefrontApi\Models\DefiningAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'images', \Scayle\StorefrontApi\Models\Image::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'priceRange', \Scayle\StorefrontApi\Models\PriceRange::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'reductionRange', \Scayle\StorefrontApi\Models\ReductionRange::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'lowestPriorPrice', \Scayle\StorefrontApi\Models\LowestPriorPrice::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'siblings', \Scayle\StorefrontApi\Models\Product::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'baseCategories', \Scayle\StorefrontApi\Models\BaseCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'variants', \Scayle\StorefrontApi\Models\Variant::class);



    }

    public function testQuery()
    {
        $responseEntity = $this->api->products->Query( []);

        $expectedResponseJson = $this->loadFixture('ProductQueryResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\ProductsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'attributes', \Scayle\StorefrontApi\Models\Attribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'advancedAttributes', \Scayle\StorefrontApi\Models\AdvancedAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'categories', \Scayle\StorefrontApi\Models\ProductCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'definingAttributes', \Scayle\StorefrontApi\Models\DefiningAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'images', \Scayle\StorefrontApi\Models\Image::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'priceRange', \Scayle\StorefrontApi\Models\PriceRange::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'reductionRange', \Scayle\StorefrontApi\Models\ReductionRange::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'lowestPriorPrice', \Scayle\StorefrontApi\Models\LowestPriorPrice::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'siblings', \Scayle\StorefrontApi\Models\Product::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'baseCategories', \Scayle\StorefrontApi\Models\BaseCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'variants', \Scayle\StorefrontApi\Models\Variant::class);



    }

}