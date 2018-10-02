<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class OpinionAuthorSocial extends Model
{
    protected $type;
    protected $url;

    /**
     * Retrieve the type property
     *
     * @return String|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Retrieve the url property
     *
     * @return String|null
     */
    public function getUrl()
    {
        return $this->url;
    }
}
