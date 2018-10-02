<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\Models;

class ResponseModelPopularsGet extends ContextModel
{
    protected $models;

    protected $mappingClasses = [
        'models' => Models::class,
    ];

    /**
     * Retrieve the models property
     *
     * @return Models|null
     */
    public function getModels()
    {
        return $this->models;
    }
}
