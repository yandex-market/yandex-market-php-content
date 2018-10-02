<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelSpecification extends Model
{
    protected $features;
    protected $name;

    protected $mappingClasses = [
        'features' => ModelSpecificationFeatures::class,
    ];

    /**
     * Retrieve the features property
     *
     * @return ModelSpecificationFeatures|null
     */
    public function getFeatures()
    {
        return $this->features;
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
}
