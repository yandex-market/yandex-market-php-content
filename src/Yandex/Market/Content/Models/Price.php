<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Price extends Model
{
    protected $base;
    protected $discount;
    protected $shopMax;
    protected $shopMin;
    protected $value;

    /**
     * Retrieve the base property
     *
     * @return String|null
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Retrieve the discount property
     *
     * @return String|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Retrieve the shopMax property
     *
     * @return String|null
     */
    public function getShopMax()
    {
        return $this->shopMax;
    }

    /**
     * Retrieve the shopMin property
     *
     * @return String|null
     */
    public function getShopMin()
    {
        return $this->shopMin;
    }

    /**
     * Retrieve the value property
     *
     * @return String|null
     */
    public function getValue()
    {
        return $this->value;
    }
}
