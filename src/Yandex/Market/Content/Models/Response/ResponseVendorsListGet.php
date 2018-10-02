<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\Vendors;

class ResponseVendorsListGet extends PagedModel
{
    protected $vendors;

    protected $mappingClasses = [
        'vendors' => Vendors::class,
    ];

    /**
     * @return Vendors
     */
    public function getVendors()
    {
        return $this->vendors;
    }
}
