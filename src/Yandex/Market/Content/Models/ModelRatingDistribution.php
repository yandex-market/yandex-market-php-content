<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelRatingDistribution extends Model
{
    protected $count;
    protected $percent;
    protected $value;

    /**
     * Retrieve the count property
     *
     * @return Integer|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Retrieve the percent property
     *
     * @return Integer|null
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Retrieve the value property
     *
     * @return Float|null
     */
    public function getValue()
    {
        return $this->value;
    }
}
