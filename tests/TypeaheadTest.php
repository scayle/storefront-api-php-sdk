<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class TypeaheadTest extends BaseApiTestCase
{
    public function testGetSuggestions()
    {
        $responseEntity = $this->api->typeaheads->GetSuggestions('1',  []);

        $expectedResponseJson = $this->loadFixture('TypeaheadGetSuggestionsResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Typeahead::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'suggestions', \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'topMatch', \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class);



    }

    public function testPostSuggestions()
    {
        $expectedRequestJson = $this->loadFixture('TypeaheadPostSuggestionsRequest.json');

        $requestEntity = new \Scayle\StorefrontApi\Models\TypeaheadBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->typeaheads->PostSuggestions('1', $requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('TypeaheadPostSuggestionsResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\Typeahead::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'suggestions', \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'topMatch', \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class);



    }

}