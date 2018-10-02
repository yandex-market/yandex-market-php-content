<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class ModelRatingDistributions extends ObjectModel
{
    /**
     * Add distribution to collection
     *
     * @param ModelRatingDistribution|array $option
     *
     * @return ModelRatingDistributions
     */
    public function add($distribution)
    {
        if (is_array($distribution)) {
            $this->collection[] = new ModelRatingDistribution($distribution);
        } elseif (is_object($distribution) && $distribution instanceof ModelRatingDistribution) {
            $this->collection[] = $distribution;
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
