<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property TypeaheadSuggestion[] $suggestions 
 * @property TypeaheadSuggestion $topMatch 
 */
class Typeahead extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'topMatch' => \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class,
    ];

    protected $collectionClassMap = [
        'suggestions' => \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}