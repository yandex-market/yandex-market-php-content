<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Criteria extends Model
{

    protected $id;
    protected $text;
    protected $value;

    /**
     * Retrieve the age property
     *
     * @return String|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the age property
     *
     * @return String|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Retrieve the age property
     *
     * @return String|null
     */
    public function getValue()
    {
        return $this->value;
    }
}
