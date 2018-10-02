<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\GeoRegions;

class ResponseGeoRegionSuggestGet extends PagedModel
{
    protected $suggests;

    protected $mappingClasses = [
        'suggests' => GeoRegions::class,
    ];

    /**
     * Retrieve the regions property
     *
     * @param array $data
     */
    public function getSuggests()
    {
        return $this->suggests;
    }
}
