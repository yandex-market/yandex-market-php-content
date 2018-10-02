<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class CategoryWarnings extends ObjectModel
{
    /**
     * Add category to collection
     *
     * @param CategoryWarning|array $category
     *
     * @return CategoryWarnings
     */
    public function add($warning)
    {
        if (is_array($warning)) {
            $this->collection[] = new CategoryWarning($warning);
        } elseif (is_object($warning) && $warning instanceof CategoryWarning) {
            $this->collection[] = $warning;
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
