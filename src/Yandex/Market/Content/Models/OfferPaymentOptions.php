<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class OfferPaymentOptions extends Model
{
    protected $canPayByCard;

    /**
     * Retrieve the canPayByCard property
     *
     * @return boolean
     */
    public function getCanPayByCard()
    {
        return $this->canPayByCard;
    }
}
