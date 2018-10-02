<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class OptionConditions extends Model
{
    protected $alternatePrice;
    protected $daysFrom;
    protected $daysTo;
    protected $deliveryIncluded;
    protected $orderBefore;
    protected $price;

    protected $mappingClasses = [
        'alternatePrice' => Price::class,
    ];

    /**
     * Retrieve the alternatePrice property
     *
     * @return Price|null
     */
    public function getAlternatePrice()
    {
        return $this->alternatePrice;
    }

    /**
     * Retrieve the daysFrom property
     *
     * @return Integer|null
     */
    public function getDaysFrom()
    {
        return $this->daysFrom;
    }

    /**
     * Retrieve the daysTo property
     *
     * @return Integer|null
     */
    public function getDaysTo()
    {
        return $this->daysTo;
    }

    /**
     * Retrieve the deliveryIncluded property
     *
     * @return Boolean|null
     */
    public function getDeliveryIncluded()
    {
        return $this->deliveryIncluded;
    }

    /**
     * Retrieve the orderBefore property
     *
     * @return Integer|null
     */
    public function getOrderBefore()
    {
        return $this->orderBefore;
    }

    /**
     * Retrieve the price property
     *
     * @return Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }
}
