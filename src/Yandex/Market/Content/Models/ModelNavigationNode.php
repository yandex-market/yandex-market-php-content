<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelNavigationNode extends Model
{
    protected $datasource;
    protected $hid;
    protected $icons;
    protected $id;
    protected $maxDiscount;
    protected $modelCount;
    protected $name;
    protected $offerCount;
    protected $shortName;
    protected $type;
    protected $visual;

    protected $mappingClasses = [
        'icons' => ModelNavigationNodeIcons::class,
        'datasource' => ModelNavigationNodeDatasource::class,
    ];

    /**
     * Retrieve the datasource property
     *
     * @return ModelNavigationNodeDatasource|null
     */
    public function getDatasource()
    {
        return $this->datasource;
    }

    /**
     * Retrieve the hid property
     *
     * @return Integer|null
     */
    public function getHid()
    {
        return $this->hid;
    }

    /**
     * Retrieve the icons property
     *
     * @return ModelNavigationNodeIcons|null
     */
    public function getIcons()
    {
        return $this->icons;
    }

    /**
     * Retrieve the id property
     *
     * @return Integer|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the maxDiscount property
     *
     * @return String|null
     */
    public function getMaxDiscount()
    {
        return $this->maxDiscount;
    }

    /**
     * Retrieve the modelCount property
     *
     * @return Integer|null
     */
    public function getModelCount()
    {
        return $this->modelCount;
    }

    /**
     * Retrieve the name property
     *
     * @return String|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Retrieve the offerCount property
     *
     * @return Integer|null
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * Retrieve the shortName property
     *
     * @return String|null
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Retrieve the type property
     *
     * @return String|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Retrieve the visual property
     *
     * @return Boolean|null
     */
    public function getVisual()
    {
        return $this->visual;
    }
}
