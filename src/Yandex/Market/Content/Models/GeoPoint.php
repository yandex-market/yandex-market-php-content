<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class GeoPoint extends Model
{
    protected $coordinates;
    protected $distance;

    protected $mappingClasses = [
        'coordinates' => Coordinate::class,
    ];

    /**
     * Retrieve the coordinates property
     *
     * @return Coordinate|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Retrieve the distance property
     *
     * @return Float|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
}
