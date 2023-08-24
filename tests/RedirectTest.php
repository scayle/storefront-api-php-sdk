<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class RedirectTest extends BaseApiTestCase
{
    public function testMatch()
    {
        $expectedRequestJson = $this->loadFixture('RedirectMatchRequest.json');

        $requestEntity = new \Scayle\StorefrontApi\Models\MatchRedirectBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->redirects->Match($requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('RedirectMatchResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Redirect::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

    public function testGet()
    {
        $responseEntity = $this->api->redirects->Get( []);

        $expectedResponseJson = $this->loadFixture('RedirectGetResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\RedirectsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}