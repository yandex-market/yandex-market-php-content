<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Common\Model;
use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\ModelInfo;

class ResponseModelGet extends ContextModel
{
    protected $model;

    protected $mappingClasses = [
        'model' => ModelInfo::class,
    ];

    /**
     * Retrieve the model property
     *
     * @return Model|null
     */
    public function getModel()
    {
        return $this->model;
    }
}
