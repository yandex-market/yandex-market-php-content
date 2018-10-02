<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Phones extends ObjectModel
{
    /**
     * Add phone to collection
     *
     * @param Phone|array $outlet
     *
     * @return Phones
     */
    public function add($phone)
    {
        if (is_array($phone)) {
            $this->collection[] = new Phone($phone);
        } elseif (is_object($phone) && $phone instanceof Phone) {
            $this->collection[] = $phone;
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
