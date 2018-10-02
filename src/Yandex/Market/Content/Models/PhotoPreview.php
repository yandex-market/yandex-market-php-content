<?php


namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class PhotoPreview extends Model
{
    protected $colorId;
    protected $height;
    protected $url;
    protected $width;

    /**
     * Retrieve the colorId property
     *
     * @return String|null
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * Retrieve the height property
     *
     * @return Integer|null
     */
    public function getHeight()
    {
        return $this->height;
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

    /**
     * Retrieve the width property
     *
     * @return Integer|null
     */
    public function getWidth()
    {
        return $this->width;
    }
}
