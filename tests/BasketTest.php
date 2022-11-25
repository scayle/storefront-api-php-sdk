<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class BasketTest extends BaseApiTestCase
{
    public function testAddItem()
    {
        $expectedRequestJson = $this->loadFixture('BasketAddItemRequest.json');

        $requestEntity = new \Scayle\StorefrontApi\Models\CreateBasketBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->baskets->AddItem('1', $requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('BasketAddItemResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \Scayle\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \Scayle\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \Scayle\StorefrontApi\Models\Package::class);



    }

    public function testGet()
    {
        $responseEntity = $this->api->baskets->Get('1',  []);

        $expectedResponseJson = $this->loadFixture('BasketGetResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \Scayle\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \Scayle\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \Scayle\StorefrontApi\Models\Package::class);



    }

    public function testRemove()
    {
        $responseEntity = $this->api->baskets->Remove('1', '1',  []);

        $expectedResponseJson = $this->loadFixture('BasketRemoveResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \Scayle\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \Scayle\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \Scayle\StorefrontApi\Models\Package::class);



    }

    public function testUpdate()
    {
        $expectedRequestJson = $this->loadFixture('BasketUpdateRequest.json');

        $requestEntity = new \Scayle\StorefrontApi\Models\CreateBasketBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->baskets->Update('1', '1', $requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('BasketUpdateResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \Scayle\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \Scayle\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \Scayle\StorefrontApi\Models\Package::class);



    }

}