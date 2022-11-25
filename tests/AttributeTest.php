<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class AttributeTest extends BaseApiTestCase
{
    public function testGetByKey()
    {
        $responseEntity = $this->api->attributes->GetByKey('1',  []);

        $expectedResponseJson = $this->loadFixture('AttributeGetByKeyResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Attribute::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'values', \Scayle\StorefrontApi\Models\AttributeValue::class);



    }

}