<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Facts extends ObjectModel
{
    /**
     * Add fact to collection
     *
     * @param Fact|array $filter
     *
     * @return Facts
     */
    public function add($fact)
    {
        if (is_array($fact)) {
            $this->collection[] = new Fact($fact);
        } elseif (is_object($fact) && $fact instanceof Fact) {
            $this->collection[] = $fact;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return array
     */
    public function getAll()
    {
        return $this->collection;
    }
}
