<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Options extends ObjectModel
{
    /**
     * Add photo to collection
     *
     * @param Option|array $option
     *
     * @return Options
     */
    public function add($option)
    {
        if (is_array($option)) {
            $this->collection[] = new Option($option);
        } elseif (is_object($option) && $option instanceof Option) {
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
