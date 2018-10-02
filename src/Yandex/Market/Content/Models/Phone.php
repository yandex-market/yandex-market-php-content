<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Phone extends Model
{
    protected $call;
    protected $number;
    protected $sanitized;

    /**
     * Retrieve the call property
     *
     * @return String|null
     */
    public function getCall()
    {
        return $this->call;
    }

    /**
     * Retrieve the number property
     *
     * @return String|null
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Retrieve the sanitized property
     *
     * @return String|null
     */
    public function getSanitized()
    {
        return $this->sanitized;
    }
}
