<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Services\ServiceFactory;

/**
 * Allows access to AdminApi functions.
 *
 * @property \Scayle\StorefrontApi\Services\AttributeService $attributes
 * @property \Scayle\StorefrontApi\Services\BrandService $brands
 * @property \Scayle\StorefrontApi\Services\CategoryService $categories
 * @property \Scayle\StorefrontApi\Services\FilterService $filters
 * @property \Scayle\StorefrontApi\Services\CampaignService $campaign
 * @property \Scayle\StorefrontApi\Services\NavigationService $navigation
 * @property \Scayle\StorefrontApi\Services\ProductService $products
 * @property \Scayle\StorefrontApi\Services\SearchService $search
 * @property \Scayle\StorefrontApi\Services\ShopConfigurationService $shopConfigurations
 * @property \Scayle\StorefrontApi\Services\TypeaheadService $typeahead
 * @property \Scayle\StorefrontApi\Services\VariantService $variants
 * @property \Scayle\StorefrontApi\Services\WishlistService $wishlists
 * @property \Scayle\StorefrontApi\Services\BasketService $baskets
 * @property \Scayle\StorefrontApi\Services\RedirectService $redirects
 */
class StorefrontClient extends AbstractApi
{
	/**
	 * @var ServiceFactory $serviceFactory
	 */
	private $serviceFactory;

	public function __get($name)
	{
		if ($this->serviceFactory === null) {
            $this->serviceFactory = new ServiceFactory($this);
        }

        return $this->serviceFactory->get($name);
    }
}