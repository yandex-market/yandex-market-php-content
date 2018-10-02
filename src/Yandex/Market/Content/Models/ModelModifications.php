<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class ModelModifications extends ObjectModel
{
    /**
     * Add geo modification to collection
     *
     * @param ModelModification|array $modification
     *
     * @return ModelModifications
     */
    public function add($modification)
    {
        if (is_array($modification)) {
            $this->collection[] = new ModelModification($modification);
        } elseif (is_object($modification) && $modification instanceof ModelModification) {
            $this->collection[] = $modification;
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
