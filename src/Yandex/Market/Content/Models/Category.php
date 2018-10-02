<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Category extends Model
{
    protected $advertisingModel;
    protected $children;
    protected $childCount;
    protected $fullName;
    protected $id;
    protected $link;
    protected $modelCount;
    protected $name;
    protected $offerCount;
    protected $parent;
    protected $viewType;
    protected $warnings;
    protected $adult;

    protected $mappingClasses = [
        'warnings' => CategoryWarnings::class,
    ];

    /**
     * Retrieve the advertisingModel property
     *
     * @return string|null
     */
    public function getAdvertisingModel()
    {
        return $this->advertisingModel;
    }

    /**
     * Retrieve adult property
     *
     * @return boolean
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Retrieve the childCount property
     *
     * @return int|null
     */
    public function getChildCount()
    {
        return $this->childCount;
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
     * Retrieve the id property
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the link property
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Retrieve the modelCount property
     *
     * @return int|null
     */
    public function getModelCount()
    {
        return $this->modelCount;
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
     * Retrieve the offerCount property
     *
     * @return string|null
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * Retrieve the parent property
     *
     * @return int|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Retrieve the viewType property
     *
     * @return string|null
     */
    public function getViewType()
    {
        return $this->viewType;
    }

    /**
     * Retrieve the warning property
     *
     * @return CategoryWarnings|null
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Retrieve the children property
     *
     * @note Property available during /vendor request.
     *
     * @return Categories|null
     */
    public function getChildren()
    {
        return $this->children;
    }
}
