<?php

namespace Yandex\Market\Content\Models\Response;

;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\Outlets;

class ResponseShopOutletsGet extends PagedModel
{
    protected $outlets;

    protected $mappingClasses = [
        'outlets' => Outlets::class,
    ];

    /**
     * Retrieve outlets property
     *
     * @return Outlets|null
     */
    public function getOutlets()
    {
        return $this->outlets;
    }
}
