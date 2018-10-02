<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Fact extends Model
{
    protected $id;
    protected $title;
    protected $value;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
