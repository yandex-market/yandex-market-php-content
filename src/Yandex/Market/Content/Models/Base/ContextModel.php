<?php

namespace Yandex\Market\Content\Models\Base;

use Yandex\Common\Model;
use Yandex\Market\Content\Models\GeoRegion;

class ContextModel extends Model
{
    protected $context;

    /**
     * ContextModel constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->context = new Context($data['context']);
        unset($data['context']);
        parent::__construct($data);
    }

    /**
     * Retrieve currency property
     *
     * @return ContextCurrency
     */
    public function getCurrency()
    {
        return $this->context->getCurrency();
    }

    /**
     * Retrieve region property
     *
     * @return \Yandex\Market\Content\Models\GeoRegion
     */
    public function getRegion()
    {
        return $this->context->getRegion();
    }
}
