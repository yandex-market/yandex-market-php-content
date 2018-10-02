<?php

namespace Yandex\Market\Content\Models\Base;

use Yandex\Common\Model;

class ContextPage extends Model
{
    protected $count;
    protected $number;
    protected $last;
    protected $total;
    protected $totalItems;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}
