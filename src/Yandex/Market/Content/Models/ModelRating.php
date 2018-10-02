<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelRating extends Model
{
    protected $count;
    protected $distribution;
    protected $value;

    protected $mappingClasses = [
        'distribution' => ModelRatingDistributions::class,
    ];

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
     * Retrieve the distribution property
     *
     * @return ModelRatingDistributions|null
     */
    public function getDistribution()
    {
        return $this->distribution;
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
