<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property \Scayle\StorefrontApi\Models\Filter[] $entities
 */
class FilterCollection extends ApiCollection
{
	protected $collectionClassMap = [
		'entities' => \Scayle\StorefrontApi\Models\Filter::class,
    ];

    /**
    * @return \Scayle\StorefrontApi\Models\Filter[]
    */
    public function getEntities()
    {
        return $this->entities;
    }
}