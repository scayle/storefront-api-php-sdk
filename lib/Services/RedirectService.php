<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class RedirectService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param \Scayle\StorefrontApi\Models\MatchRedirectBody $model the model to create or update
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\Redirect
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function match($model, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('post', 'redirects', $combinedOptions, \Scayle\StorefrontApi\Models\Redirect::class, $model);
     }

	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\RedirectsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'redirects', $combinedOptions, \Scayle\StorefrontApi\Models\RedirectsResponse::class);
     }

}
