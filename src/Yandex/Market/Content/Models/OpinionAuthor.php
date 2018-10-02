<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class OpinionAuthor extends Model
{
    protected $avatarUrl;
    protected $grades;
    protected $name;
    protected $social;
    protected $visibility;

    protected $mappingClasses = [
        'social' => OpinionAuthorSocials::class,
    ];

    /**
     * Retrieve the avatarUrl property
     *
     * @return String|null
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * Retrieve the grades property
     *
     * @return Integer|null
     */
    public function getGrades()
    {
        return $this->grades;
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
     * Retrieve the social property
     *
     * @return OpinionAuthorSocials|null
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Retrieve the visibility property
     *
     * @return String|null
     */
    public function getVisibility()
    {
        return $this->visibility;
    }
}
