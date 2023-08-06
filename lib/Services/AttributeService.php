<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class AttributeService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $groupName
	 *
	 * @return \Scayle\StorefrontApi\Models\Attribute
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByKey($groupName)
	 {
         $combinedOptions = [];

		 return $this->request('get', $this->resolvePath('attributes/%s', $groupName), $combinedOptions, \Scayle\StorefrontApi\Models\Attribute::class);
     }

}