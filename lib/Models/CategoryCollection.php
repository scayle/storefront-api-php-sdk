<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property \Scayle\StorefrontApi\Models\Category[] $entities
 */
class CategoryCollection extends ApiCollection
{
	protected $collectionClassMap = [
		'entities' => \Scayle\StorefrontApi\Models\Category::class,
    ];

    /**
    * @return \Scayle\StorefrontApi\Models\Category[]
    */
    public function getEntities()
    {
        return $this->entities;
    }
}