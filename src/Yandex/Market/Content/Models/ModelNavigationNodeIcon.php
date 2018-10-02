<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelNavigationNodeIcon extends Model
{
    protected $url;

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
