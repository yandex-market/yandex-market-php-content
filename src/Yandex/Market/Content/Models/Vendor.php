<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Vendor extends Model
{
    protected $categories;
    protected $id;
    protected $link;
    protected $name;
    protected $picture;
    protected $recommendedShops;
    protected $site;
    protected $topCategories;
    protected $isFake;

    protected $mappingClasses = [
        'categories' => Categories::class,
        'topCategories' => Categories::class,
    ];

    /**
     * Retrieve the categories property
     *
     * @return Categories|null
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Retrieve the isFake property
     *
     * @return boolean|null
     */
    public function getIsFake()
    {
        return $this->isFake;
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
     * Retrieve the link property
     *
     * @return String|null
     */
    public function getLink()
    {
        return $this->link;
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
     * Retrieve the picture property
     *
     * @return String|null
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Retrieve the recommendedShops property
     *
     * @return String|null
     */
    public function getRecommendedShops()
    {
        return $this->recommendedShops;
    }

    /**
     * Retrieve the site property
     *
     * @return String|null
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Retrieve the topCategories property
     *
     * @return Categories|null
     */
    public function getTopCategories()
    {
        return $this->topCategories;
    }
}
