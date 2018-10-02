<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class ModelReviews extends ObjectModel
{
    /**
     * Add review to collection
     *
     * @param CategoryWarning|array $category
     *
     * @return ModelReviews
     */
    public function add($review)
    {
        if (is_array($review)) {
            $this->collection[] = new ModelReview($review);
        } elseif (is_object($review) && $review instanceof ModelReview) {
            $this->collection[] = $review;
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
