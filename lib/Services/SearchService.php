<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class SearchService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $term
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\SearchSuggestions
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function suggestions($term, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["term"] = $term;

		 return $this->request('get', 'search/suggestions', $combinedOptions, \Scayle\StorefrontApi\Models\SearchSuggestions::class);
     }

}
