<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\Vendor;
use Yandex\Market\Content\Models\Vendors;

class ResponseVendorGet extends ContextModel
{
    protected $vendor;

    protected $mappingClasses = [
        'vendor' => Vendor::class,
    ];

    /**
     * Retrieve the categories property
     *
     * @return Vendors|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}
