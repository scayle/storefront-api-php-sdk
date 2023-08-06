<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class CampaignTest extends BaseApiTestCase
{
    public function testGetAll()
    {
        $responseEntity = $this->api->campaigns->GetAll( []);

        $expectedResponseJson = $this->loadFixture('CampaignGetAllResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\CampaignsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

    public function testGetById()
    {
        $responseEntity = $this->api->campaigns->GetById('1',  []);

        $expectedResponseJson = $this->loadFixture('CampaignGetByIdResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Campaign::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}