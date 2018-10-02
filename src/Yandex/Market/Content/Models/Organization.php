<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Organization extends Model
{
    protected $address;
    protected $contactUrl;
    protected $name;
    protected $ogrn;
    protected $postalAddress;
    protected $type;

    /**
     * Retrieve the address property
     *
     * @return String|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Retrieve the contactUrl property
     *
     * @return String|null
     */
    public function getContactUrl()
    {
        return $this->contactUrl;
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
     * Retrieve the ogrn property
     *
     * @return String|null
     */
    public function getOgrn()
    {
        return $this->ogrn;
    }

    /**
     * Retrieve the postalAddress property
     *
     * @return String|null
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Retrieve the type property
     *
     * @return String|null
     */
    public function getType()
    {
        return $this->type;
    }
}
