<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class FilterService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\FilterCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'filters', $combinedOptions, \Scayle\StorefrontApi\Models\FilterCollection::class);
     }

	/**
	 * Description
	 *
	 * @param string $groupName
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\FilterCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getValues($groupName, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('filters/%s/values', $groupName), $combinedOptions, \Scayle\StorefrontApi\Models\FilterCollection::class);
     }

}