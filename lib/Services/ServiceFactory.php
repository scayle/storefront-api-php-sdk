<?php

namespace Scayle\StorefrontApi\Services;

/**
 * Factory to create API services
 */
class ServiceFactory extends AbstractServiceFactory
{
	/**
	 * @var array<string, string>
     */
    protected $classMap = [
        'attributes' => \Scayle\StorefrontApi\Services\AttributeService::class,
        'brands' => \Scayle\StorefrontApi\Services\BrandService::class,
        'categories' => \Scayle\StorefrontApi\Services\CategoryService::class,
        'filters' => \Scayle\StorefrontApi\Services\FilterService::class,
        'campaign' => \Scayle\StorefrontApi\Services\CampaignService::class,
        'navigation' => \Scayle\StorefrontApi\Services\NavigationService::class,
        'products' => \Scayle\StorefrontApi\Services\ProductService::class,
        'search' => \Scayle\StorefrontApi\Services\SearchService::class,
        'shopConfigurations' => \Scayle\StorefrontApi\Services\ShopConfigurationService::class,
        'typeahead' => \Scayle\StorefrontApi\Services\TypeaheadService::class,
        'variants' => \Scayle\StorefrontApi\Services\VariantService::class,
        'wishlists' => \Scayle\StorefrontApi\Services\WishlistService::class,
        'baskets' => \Scayle\StorefrontApi\Services\BasketService::class,
    ];
}