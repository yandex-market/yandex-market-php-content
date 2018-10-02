<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class OpinionAuthorSocials extends ObjectModel
{
    /**
     * Add social to collection
     *
     * @param OpinionAuthorSocial|array $review
     *
     * @return OpinionAuthorSocials
     */
    public function add($social)
    {
        if (is_array($social)) {
            $this->collection[] = new OpinionAuthorSocial($social);
        } elseif (is_object($social) && $social instanceof OpinionAuthorSocial) {
            $this->collection[] = $social;
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
