<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelNavigationNodeDatasourceOrder extends Model
{
    protected $how;
    protected $sort;

    /**
     * Retrieve the how property
     *
     * @return String|null
     */
    public function getHow()
    {
        return $this->how;
    }

    /**
     * Retrieve the sort property
     *
     * @return String|null
     */
    public function getSort()
    {
        return $this->sort;
    }
}
