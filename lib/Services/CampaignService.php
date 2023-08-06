<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class CampaignService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\CampaignsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getAll($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'campaigns', $combinedOptions, \Scayle\StorefrontApi\Models\CampaignsResponse::class);
     }

	/**
	 * Description
	 *
	 * @param int $campaignId
	 *
	 * @return \Scayle\StorefrontApi\Models\Campaign
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($campaignId)
	 {
         $combinedOptions = [];

		 return $this->request('get', $this->resolvePath('campaigns/%s', $campaignId), $combinedOptions, \Scayle\StorefrontApi\Models\Campaign::class);
     }

}