<?php

namespace Yandex\Market\Content\Models;

class OptionService
{
    protected $id;
    protected $name;

    /**
     * Retrieve the id property
     *
     * @return Integer|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the name property
     *
     * @return String|null
     */
    public function getName()
    {
        return $this->name;
    }
}
