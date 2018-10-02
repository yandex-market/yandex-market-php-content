<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Warnings extends ObjectModel
{
    /**
     * Add warning to collection
     *
     * @param CategoryWarning|array $option
     *
     * @return Warnings
     */
    public function add($warning)
    {
        if (is_array($warning)) {
            $this->collection[] = new Warning($warning);
        } elseif (is_object($warning) && $warning instanceof Warning) {
            $this->collection[] = $warning;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return array|null
     */
    public function getAll()
    {
        return $this->collection;
    }
}
