<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Option extends Model
{
    protected $brief;
    protected $conditions;
    protected $outletCount;
    protected $service;

    protected $mappingClasses = [
        'conditions' => OptionConditions::class,
        'service' => OptionService::class,
    ];

    /**
     * Retrieve the brief property
     *
     * @return String|null
     */
    public function getBrief()
    {
        return $this->brief;
    }

    /**
     * Retrieve the conditions property
     *
     * @return OptionConditions|null
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Retrieve the outletCount property
     *
     * @return Integer|null
     */
    public function getOutletCount()
    {
        return $this->outletCount;
    }

    /**
     * Retrieve the service property
     *
     * @return OptionService|null
     */
    public function getService()
    {
        return $this->service;
    }
}
