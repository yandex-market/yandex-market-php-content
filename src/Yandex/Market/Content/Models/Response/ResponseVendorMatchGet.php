<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\Vendor;

class ResponseVendorMatchGet extends ContextModel
{
    protected $vendor;

    protected $mappingClasses = [
        'vendor' => Vendor::class,
    ];

    /**
     * Retrieve the categories property
     *
     * @return Vendor|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}
