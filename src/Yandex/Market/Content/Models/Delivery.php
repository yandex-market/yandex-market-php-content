<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Delivery extends Model
{
    protected $alternatePrice;
    protected $brief;
    protected $carried;
    protected $deliveryIncluded;
    protected $description;
    protected $downloadable;
    protected $free;
    protected $global;
    protected $inStock;
    protected $localDelivery;
    protected $localStore;
    protected $options;
    protected $pickup;
    protected $pickupOptions;
    protected $price;
    protected $shopRegion;
    protected $userRegion;

    protected $mappingClasses = [
        'alternatePrice' => Price::class,
        'price' => Price::class,
        'shopRegion' => GeoRegion::class,
        'userRegion' => GeoRegion::class,
        'pickupOptions' => Options::class,
        'options' => Options::class,
    ];

    /**
     * Retrieve the alternatePrice property
     *
     * @return Price|null
     */
    public function getAlternatePrice()
    {
        return $this->alternatePrice;
    }

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
     * Retrieve the carried property
     *
     * @return Boolean|null
     */
    public function getCarried()
    {
        return $this->carried;
    }

    /**
     * Retrieve the deliveryIncluded property
     *
     * @return Boolean|null
     */
    public function getDeliveryIncluded()
    {
        return $this->deliveryIncluded;
    }

    /**
     * Retrieve the description property
     *
     * @return String|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Retrieve the downloadable property
     *
     * @return Boolean|null
     */
    public function getDownloadable()
    {
        return $this->downloadable;
    }

    /**
     * Retrieve the free property
     *
     * @return Boolean|null
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Retrieve the global property
     *
     * @return Boolean|null
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * Retrieve the inStock property
     *
     * @return Boolean|null
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * Retrieve the localDelivery property
     *
     * @return Boolean|null
     */
    public function getLocalDelivery()
    {
        return $this->localDelivery;
    }

    /**
     * Retrieve the localStore property
     *
     * @return Boolean|null
     */
    public function getLocalStore()
    {
        return $this->localStore;
    }

    /**
     * Retrieve the options property
     *
     * @return Options|null // todo: update option
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Retrieve the pickup property
     *
     * @return Boolean|null
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Retrieve the pickupOptions property
     *
     * @return Options|null
     */
    public function getPickupOptions()
    {
        return $this->pickupOptions;
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
     * Retrieve the shopRegion property
     *
     * @return GeoRegion|null
     */
    public function getShopRegion()
    {
        return $this->shopRegion;
    }

    /**
     * Retrieve the userRegion property
     *
     * @return GeoRegion|null
     */
    public function getUserRegion()
    {
        return $this->userRegion;
    }
}
