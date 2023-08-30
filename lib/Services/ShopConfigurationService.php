<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class ShopConfigurationService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $locale
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\ShopConfiguration
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function suggestions($locale, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["locale"] = $locale;

		 return $this->request('get', 'shop-configuration', $combinedOptions, \Scayle\StorefrontApi\Models\ShopConfiguration::class);
     }

}
