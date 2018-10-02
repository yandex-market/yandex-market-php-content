<?php

namespace Yandex\Market\Content\Models;

class OfferPhoto extends Photo
{
    protected $id;

    /**
     * Retrieve the id property
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
}
