<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class VariantTest extends BaseApiTestCase
{
    public function testGetByIds()
    {
        $responseEntity = $this->api->variants->GetByIds('1',  []);

        $expectedResponseJson = $this->loadFixture('VariantGetByIdsResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\VariantsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'attributes', \Scayle\StorefrontApi\Models\Attribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'advancedAttributes', \Scayle\StorefrontApi\Models\AdvancedAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'price', \Scayle\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'stock', \Scayle\StorefrontApi\Models\Stock::class);



    }

}