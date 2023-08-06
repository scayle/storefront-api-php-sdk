<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class ProductService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param int $productId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Product
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($productId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('products/%s', $productId), $combinedOptions, \Scayle\StorefrontApi\Models\Product::class);
     }

	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\ProductsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function query($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'products', $combinedOptions, \Scayle\StorefrontApi\Models\ProductsResponse::class);
     }

}