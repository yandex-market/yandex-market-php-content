<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class SortOption extends Model
{
    protected $id;
    protected $how;
    protected $text;

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
    public function getHow()
    {
        return $this->how;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
