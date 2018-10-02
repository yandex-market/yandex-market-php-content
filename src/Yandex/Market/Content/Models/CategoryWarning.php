<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class CategoryWarning extends Model
{
    protected $age;
    protected $shortText;
    protected $text;

    /**
     * Retrieve the age property
     *
     * @return int|null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Retrieve the shortText property
     *
     * @return string|null
     */
    public function getShortText()
    {
        return $this->shortText;
    }

    /**
     * Retrieve the text property
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
}
