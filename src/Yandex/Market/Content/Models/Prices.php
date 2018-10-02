<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Prices extends ObjectModel
{
    /**
     * Add photo to collection
     *
     * @param Price|array $photo
     *
     * @return Prices
     */
    public function add($price)
    {
        if (is_array($price)) {
            $this->collection[] = new Price($price);
        } elseif (is_object($price) && $price instanceof Price) {
            $this->collection[] = $price;
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
