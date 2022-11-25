<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property \Scayle\StorefrontApi\Models\NavigationTree[] $entities
 */
class NavigationTreeCollection extends ApiCollection
{
	protected $collectionClassMap = [
		'entities' => \Scayle\StorefrontApi\Models\NavigationTree::class,
    ];

    /**
    * @return \Scayle\StorefrontApi\Models\NavigationTree[]
    */
    public function getEntities()
    {
        return $this->entities;
    }
}