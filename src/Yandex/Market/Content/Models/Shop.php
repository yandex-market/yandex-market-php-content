<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Shop extends Model
{
    protected $domain;
    protected $id;
    protected $name;
    protected $opinionUrl;
    protected $organizations;
    protected $rating;
    protected $region;
    protected $registered;

    protected $mappingClasses = [
        'rating' => ModelRating::class,
        'organizations' => Organizations::class,
        'region' => GeoRegion::class
    ];

    /**
     * Retrieve the domain property
     *
     * @return String|null
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Retrieve the id property
     *
     * @return Integer|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the name property
     *
     * @return String|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Retrieve the opinionUrl property
     *
     * @return String|null
     */
    public function getOpinionUrl()
    {
        return $this->opinionUrl;
    }

    // @todo ren ModelRating->Rating and add $status field

    /**
     * Retrieve the organizations property
     *
     * @return Organization|null
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }

    /**
     * Retrieve the rating property
     *
     * @return ModelRating|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Retrieve the region property
     *
     * @return GeoRegion|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Retrieve the registered property
     *
     * @return String|null
     */
    public function getRegistered()
    {
        return $this->registered;
    }
}
