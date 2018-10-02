<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\GeoRegions;

class ResponseGeoRegionsGet extends PagedModel
{
    protected $regions;

    protected $mappingClasses = [
        'regions' => GeoRegions::class,
    ];

    /**
     * Retrieve the regions property
     *
     * @param array $data
     */
    public function getRegions()
    {
        return $this->regions;
    }
}
