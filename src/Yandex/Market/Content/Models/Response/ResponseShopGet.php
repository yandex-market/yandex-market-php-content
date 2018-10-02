<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\Shop;

class ResponseShopGet extends ContextModel
{
    protected $shop;

    protected $mappingClasses = [
        'shop' => Shop::class,
    ];

    /**
     * Retrieve the shop property
     *
     * @return Shop|null
     */
    public function getShop()
    {
        return $this->shop;
    }
}
