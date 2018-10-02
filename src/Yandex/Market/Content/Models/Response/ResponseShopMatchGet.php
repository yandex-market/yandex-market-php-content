<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\Shops;

class ResponseShopMatchGet extends PagedModel
{
    protected $shops;

    protected $mappingClasses = [
        'shops' => Shops::class,
    ];

    /**
     * Retrieve the Shops property
     *
     * @return Shops|null
     */
    public function getShops()
    {
        return $this->shops;
    }
}
