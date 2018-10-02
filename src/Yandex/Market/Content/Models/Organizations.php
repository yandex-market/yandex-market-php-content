<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Organizations extends ObjectModel
{
    /**
     * Add organization to collection
     *
     * @param Option|array $option
     *
     * @return Organizations
     */
    public function add($organization)
    {
        if (is_array($organization)) {
            $this->collection[] = new Organization($organization);
        } elseif (is_object($organization) && $organization instanceof Organization) {
            $this->collection[] = $organization;
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
