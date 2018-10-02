<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class Models extends ObjectModel
{
    /**
     * Add model to collection
     *
     * @param ModelInfo|array $category
     *
     * @return Models
     */
    public function add($model)
    {
        if (is_array($model)) {
            $this->collection[] = new ModelInfo($model);
        } elseif (is_object($model) && $model instanceof ModelInfo) {
            $this->collection[] = $model;
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
