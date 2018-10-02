<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Sorts extends ObjectModel
{
    /**
     * Add sort to collection
     *
     * @param Sort|array $category
     *
     * @return Sorts
     */
    public function add($sort)
    {
        if (is_array($sort)) {
            $this->collection[] = new Sort($sort);
        } elseif (is_object($sort) && $sort instanceof Sort) {
            $this->collection[] = $sort;
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
