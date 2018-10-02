<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class FilterValue extends Model
{
    protected $id;
    protected $name;
    protected $initialFound;
    protected $found;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getInitialFound()
    {
        return $this->initialFound;
    }

    public function getFound()
    {
        return $this->found;
    }
}
