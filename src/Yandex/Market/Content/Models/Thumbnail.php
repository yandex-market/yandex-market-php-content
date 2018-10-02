<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Thumbnail extends Model
{
    protected $container;
    protected $height;
    protected $url;
    protected $width;

    /**
     * Retrieve the age property
     *
     * @return String|null
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Retrieve the age property
     *
     * @return Integer|null
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Retrieve the age property
     *
     * @return String|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Retrieve the age property
     *
     * @return Integer|null
     */
    public function getWidth()
    {
        return $this->width;
    }
}
