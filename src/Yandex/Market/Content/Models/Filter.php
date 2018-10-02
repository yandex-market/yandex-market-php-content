<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Filter extends Model
{
    protected $id;
    protected $name;
    protected $type;
    protected $unit;
    protected $description;
    protected $values;
    protected $max;
    protected $min;
    protected $value;
    protected $precision;

    protected $mappingClasses = [
        'values' => FilterValues::class,
    ];

    /**
     * Retrieve the id property
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the name property
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Retrieve the type property
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Retrieve the unit property
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Retrieve the description property
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Retrieve the values property
     *
     * @return FilterValues|null
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Retrieve the max property
     *
     * @return int|null
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Retrieve the min property
     *
     * @return int|null
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Retrieve the value property
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Retrieve the precision property
     *
     * @return string|null
     */
    public function getPrecision()
    {
        return $this->precision;
    }
}
