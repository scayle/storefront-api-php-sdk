<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class FilterTest extends BaseApiTestCase
{
    public function testGet()
    {
        $responseEntity = $this->api->filters->Get( []);

        $expectedResponseJson = $this->loadFixture('FilterGetResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\FilterCollection::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());



        foreach ($responseEntity->getEntities() as $collectionEntity) {
            $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Filter::class, $collectionEntity);

        }
    }

}