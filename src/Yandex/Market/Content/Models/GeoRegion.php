<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class GeoRegion extends Model
{
    protected $id;
    protected $name;
    protected $type;
    protected $childCount;
    protected $nameAccusative;
    protected $nameGenitive;
    protected $country;
    protected $parent;
    protected $fullName;

    protected $mappingClasses = [
        'country' => GeoRegion::class,
        'parent' => GeoRegion::class,
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
     * Retrieve the fullName property
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->fullName;
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
     * Retrieve the childrenCount property
     *
     * @return int|null
     */
    public function getChildCount()
    {
        return $this->childCount;
    }

    /**
     * Retrieve the nameAccusative property
     *
     * @return string|null
     */
    public function getNameAccusative()
    {
        return $this->nameAccusative;
    }

    /**
     * Retrieve the nameGenitive property
     *
     * @return string|null
     */
    public function getNameGenitive()
    {
        return $this->nameGenitive;
    }

    /**
     * Retrieve the country property
     *
     * @return GeoRegion|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Retrieve the parent property
     *
     * @return GeoRegion|null
     */
    public function getParent()
    {
        return $this->parent;
    }
}
