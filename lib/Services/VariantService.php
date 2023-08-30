<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class VariantService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $variantIds
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\VariantsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByIds($variantIds, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["ids"] = implode(',', $variantIds);

		 return $this->request('get', 'variants', $combinedOptions, \Scayle\StorefrontApi\Models\VariantsResponse::class);
     }

}
