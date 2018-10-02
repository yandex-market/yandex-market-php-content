<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\Offers;

class ResponseModelOffersGet extends PagedModel
{
    protected $offers;

    protected $mappingClasses = [
        'offers' => Offers::class,
    ];

    /**
     * Retrieve the Offers property
     *
     * @return Offers|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
}
