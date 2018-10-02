<?php

namespace Yandex\Market\Content\Models\Base;

use Yandex\Common\Model;
use Yandex\Market\Content\Models\GeoRegion;

class Context extends Model
{
    protected $region;
    protected $currency;
    protected $page;

    protected $mappingClasses = [
        'page' => ContextPage::class,
        'currency' => ContextCurrency::class,
        'region' => GeoRegion::class,
    ];

    /**
     * @return GeoRegion
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return ContextCurrency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return ContextPage
     */
    public function getPage()
    {
        return $this->page;
    }
}
