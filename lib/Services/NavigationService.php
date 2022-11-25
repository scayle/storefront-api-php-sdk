<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class NavigationService extends AbstractService
{
	/**
	 * Description
	 *
	 *
	 * @return \Scayle\StorefrontApi\Models\NavigationTreeCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getAll()
	 {
         $combinedOptions = [];

		 return $this->request('get', 'navigation/trees', $combinedOptions, \Scayle\StorefrontApi\Models\NavigationTreeCollection::class);
     }

	/**
	 * Description
	 *
	 * @param int $navigationTreeId
	 *
	 * @return \Scayle\StorefrontApi\Models\NavigationTree
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($navigationTreeId)
	 {
         $combinedOptions = [];

		 return $this->request('get', $this->resolvePath('navigation/trees/%s', $navigationTreeId), $combinedOptions, \Scayle\StorefrontApi\Models\NavigationTree::class);
     }

}