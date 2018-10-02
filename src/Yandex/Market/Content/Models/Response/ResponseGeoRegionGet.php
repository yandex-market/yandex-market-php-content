<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\GeoRegion;

class ResponseGeoRegionGet extends ContextModel
{
    protected $region;

    protected $mappingClasses = [
        'region' => GeoRegion::class,
    ];

    /**
     * Retrieve the geoRegion property
     *
     * @return GeoRegion|null
     */
    public function getGeoRegion()
    {
        return $this->region;
    }
}
