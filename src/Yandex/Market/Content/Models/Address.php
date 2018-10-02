<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Address extends Model
{
    protected $block;
    protected $country;
    protected $entrance;
    protected $estate;
    protected $floor;
    protected $fullAddress;
    protected $geoPoint;
    protected $locality;
    protected $note;
    protected $postcode;
    protected $premiseNumber;
    protected $region;
    protected $regionId;
    protected $room;
    protected $subLocality;
    protected $subRegion;
    protected $thoroughfare;
    protected $type;
    protected $wing;

    protected $mappingClasses = [
        'geoPoint' => GeoPoint::class,
    ];

    /**
     * Retrieve the block property
     *
     * @return String|null
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Retrieve the country property
     *
     * @return String|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Retrieve the entrance property
     *
     * @return String|null
     */
    public function getEntrance()
    {
        return $this->entrance;
    }

    /**
     * Retrieve the estate property
     *
     * @return String|null
     */
    public function getEstate()
    {
        return $this->estate;
    }

    /**
     * Retrieve the floor property
     *
     * @return String|null
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Retrieve the fullAddress property
     *
     * @return String|null
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
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
     * Retrieve the locality property
     *
     * @return String|null
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Retrieve the note property
     *
     * @return String|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Retrieve the postcode property
     *
     * @return String|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Retrieve the premiseNumber property
     *
     * @return String|null
     */
    public function getPremiseNumber()
    {
        return $this->premiseNumber;
    }

    /**
     * Retrieve the region property
     *
     * @return String|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Retrieve the regionId property
     *
     * @return Integer|null
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Retrieve the room property
     *
     * @return String|null
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Retrieve the subLocality property
     *
     * @return String|null
     */
    public function getSubLocality()
    {
        return $this->subLocality;
    }

    /**
     * Retrieve the subRegion property
     *
     * @return String|null
     */
    public function getSubRegion()
    {
        return $this->subRegion;
    }

    /**
     * Retrieve the thoroughfare property
     *
     * @return String|null
     */
    public function getThoroughfare()
    {
        return $this->thoroughfare;
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
     * Retrieve the wing property
     *
     * @return String|null
     */
    public function getWing()
    {
        return $this->wing;
    }
}
