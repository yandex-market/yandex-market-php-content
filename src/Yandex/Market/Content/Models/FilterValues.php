<?php


namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class FilterValues extends ObjectModel
{
    /**
     * Add category to collection
     *
     * @param CategoryWarning|array $category
     *
     * @return FilterValues
     */
    public function add($filterValue)
    {
        if (is_array($filterValue)) {
            $this->collection[] = new FilterValue($filterValue);
        } elseif (is_object($filterValue) && $filterValue instanceof FilterValue) {
            $this->collection[] = $filterValue;
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
