<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelNavigationNodeDatasource extends Model
{
    protected $criteria;
    protected $hid;
    protected $nid;
    protected $order;
    protected $type;

    protected $mappingClasses = [
        'criteria' => Criteria::class,
        'order' => ModelNavigationNodeDatasourceOrder::class,
    ];

    /**
     * Retrieve the criteria property
     *
     * @return Base\Criteria|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Retrieve the hid property
     *
     * @return Integer|null
     */
    public function getHid()
    {
        return $this->hid;
    }

    /**
     * Retrieve the nid property
     *
     * @return Integer|null
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * Retrieve the order property
     *
     * @return ModelNavigationNodeDatasourceOrder|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Retrieve the type property
     *
     * @return String|null
     */
    public function getType()
    {
        return $this->type;
    }
}
