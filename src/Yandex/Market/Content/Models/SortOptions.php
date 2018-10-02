<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class SortOptions extends ObjectModel
{
    /**
     * Add option to collection
     *
     * @param SortOption|array $category
     *
     * @return SortOptions
     */
    public function add($option)
    {
        if (is_array($option)) {
            $this->collection[] = new SortOption($option);
        } elseif (is_object($option) && $option instanceof SortOption) {
            $this->collection[] = $option;
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
