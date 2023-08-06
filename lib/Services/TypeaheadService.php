<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class TypeaheadService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $term
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Typeahead
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getSuggestions($term, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["term"] = $term;

		 return $this->request('get', 'typeahead', $combinedOptions, \Scayle\StorefrontApi\Models\Typeahead::class);
     }

	/**
	 * Description
	 *
	 * @param string $term
	 * @param \Scayle\StorefrontApi\Models\TypeaheadBody $model the model to create or update
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Typeahead
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function postSuggestions($term, $model, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["term"] = $term;

		 return $this->request('post', 'typeahead', $combinedOptions, \Scayle\StorefrontApi\Models\Typeahead::class, $model);
     }

}