<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\Offer;

class ResponseOfferGet extends ContextModel
{
    protected $offer;

    protected $mappingClasses = [
        'offer' => Offer::class,
    ];

    /**
     * Retrieve the offer property
     *
     * @return Offer|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
}
