<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelModification extends Model
{
    protected $id;
    protected $name;
    protected $description;
    protected $popularity;
    protected $offerCount;
    protected $shopCount;
    protected $price;
    protected $alternatePrices;

    protected $mappingClasses = [
        'price' => Price::class,
        'alternatePrices' => Price::class,
    ];

    /**
     * Retrieve the id property
     *
     * @return Int|null
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
     * Retrieve the description property
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Retrieve the popularity property
     *
     * @return string|null
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * Retrieve the offerCount property
     *
     * @return int|null
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * Retrieve the shopCount property
     *
     * @return int|null
     */
    public function getShopCount()
    {
        return $this->shopCount;
    }

    /**
     * Retrieve the price property
     *
     * @return Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Retrieve the alternatePrices property
     *
     * @return Price|null
     */
    public function getAlternatePrice()
    {
        return $this->alternatePrices;
    }
}
