<?php

namespace Scayle\StorefrontApi\Serializers;

class AttributeAdapter
{
    public function deserialize($attributes)
    {
        $arr = $attributes['values'];
        if (array_keys($arr) !== range(0, count($arr) - 1)) {
            $attributes['values'] = [$arr];
        }

        return new \Scayle\StorefrontApi\Models\Attribute($attributes);
    }
}