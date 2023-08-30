<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class BrandService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\BrandsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'brands', $combinedOptions, \Scayle\StorefrontApi\Models\BrandsResponse::class);
     }

	/**
	 * Description
	 *
	 * @param int $brandId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\BrandsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($brandId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('brands/%s', $brandId), $combinedOptions, \Scayle\StorefrontApi\Models\BrandsResponse::class);
     }

}
