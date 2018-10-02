<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class ModelSpecifications extends ObjectModel
{
    /**
     * Add geo specification to collection
     *
     * @param ModelSpecification|array $modification
     *
     * @return ModelSpecifications
     */
    public function add($specification)
    {
        if (is_array($specification)) {
            $this->collection[] = new ModelSpecification($specification);
        } elseif (is_object($specification) && $specification instanceof ModelSpecification) {
            $this->collection[] = $specification;
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
