<?php

namespace Yandex\Market\Content\Models\Base;

use Yandex\Common\Model;

class ContextCurrency extends Model
{
    protected $id;
    protected $name;

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
    public function getName()
    {
        return $this->name;
    }
}
