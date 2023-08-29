<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class BasketService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $basketId
	 * @param \Scayle\StorefrontApi\Models\CreateBasketBody $model the model to create or update
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Basket
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function addItem($basketId, $model, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('post', $this->resolvePath('baskets/%s/items', $basketId), $combinedOptions, \Scayle\StorefrontApi\Models\Basket::class, $model);
     }

	/**
	 * Description
	 *
	 * @param string $basketId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Basket
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($basketId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('baskets/%s', $basketId), $combinedOptions, \Scayle\StorefrontApi\Models\Basket::class);
     }

	/**
	 * Description
	 *
	 * @param string $basketId
	 * @param string $itemKey
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Basket
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function remove($basketId, $itemKey, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('delete', $this->resolvePath('baskets/%s/items/%s', $basketId, $itemKey), $combinedOptions, \Scayle\StorefrontApi\Models\Basket::class);
     }

	/**
	 * Description
	 *
	 * @param string $basketId
	 * @param string $itemKey
	 * @param \Scayle\StorefrontApi\Models\CreateBasketBody $model the model to create or update
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Basket
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function update($basketId, $itemKey, $model, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('patch', $this->resolvePath('baskets/%s/items/%s', $basketId, $itemKey), $combinedOptions, \Scayle\StorefrontApi\Models\Basket::class, $model);
     }

}
