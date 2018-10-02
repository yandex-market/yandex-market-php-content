<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Photo extends Model
{
    protected $colorId;
    protected $criteria;
    protected $height;
    protected $thumbnails;
    protected $url;
    protected $width;

    protected $mappingClasses = [
        'criteria' => Criteria::class,
        'thumbnail' => Thumbnail::class,
    ];

    /**
     * Retrieve the age property
     *
     * @return String|null
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * Retrieve the age property
     *
     * @return Criteria|null
     */
    public function getCriteria()
    {
        return $this->criteria;
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
     * @return Thumbnail|null
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
