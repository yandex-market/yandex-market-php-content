<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Coordinate extends Model
{
    protected $latitude;
    protected $longitude;

    /**
     * Retrieve the latitude property
     *
     * @return Float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Retrieve the longitude property
     *
     * @return Float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
