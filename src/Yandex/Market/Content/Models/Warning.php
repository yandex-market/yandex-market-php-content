<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Warning extends Model
{
    protected $code;
    protected $message;

    /**
     * Retrieve the code property
     *
     * @return String|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Retrieve the message property
     *
     * @return String|null
     */
    public function getMessage()
    {
        return $this->message;
    }
}
