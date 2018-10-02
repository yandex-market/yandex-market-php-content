<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Schedule extends Model
{
    protected $daysFrom;
    protected $daysTill;
    protected $from;
    protected $till;

    /**
     * Retrieve the daysFrom property
     *
     * @return string|null
     */
    public function getDaysFrom()
    {
        return $this->daysFrom;
    }

    /**
     * Retrieve the daysTill property
     *
     * @return string|null
     */
    public function getDaysTill()
    {
        return $this->daysTill;
    }

    /**
     * Retrieve the from property
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Retrieve the till property
     *
     * @return string|null
     */
    public function getTill()
    {
        return $this->till;
    }
}
