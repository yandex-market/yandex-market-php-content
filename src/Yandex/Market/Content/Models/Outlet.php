<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Outlet extends Model
{
    protected $address;
    protected $geoPoint;
    protected $id;
    protected $name;
    protected $offer;
    protected $phones;
    protected $schedule;
    protected $shop;
    protected $type;

    protected $mappingClasses = [
        'offer' => Offer::class,
        'phones' => Phones::class,
        'shop' => Shop::class,
        'address' => Address::class,
        'geoPoint' => GeoPoint::class,
        'schedule' => Schedules::class,
    ];

    /**
     * Retrieve the address property
     *
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Retrieve the geoPoint property
     *
     * @return GeoPoint|null
     */
    public function getGeoPoint()
    {
        return $this->geoPoint;
    }

    /**
     * Retrieve the id property
     *
     * @return String|null
     */
    public function getId()
    {
        return $this->id;
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
     * Retrieve the offer property
     *
     * @return Offer|null
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Retrieve the phones property
     *
     * @return Phones|null
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Retrieve the schedule property
     *
     * @return Schedules|null
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Retrieve the shop property
     *
     * @return Shop|null
     */
    public function getShop()
    {
        return $this->shop;
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
}
