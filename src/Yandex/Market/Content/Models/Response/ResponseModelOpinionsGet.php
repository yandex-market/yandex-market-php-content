<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\ModelOpinions;

class ResponseModelOpinionsGet extends PagedModel
{
    protected $opinions;

    protected $mappingClasses = [
        'opinions' => ModelOpinions::class,
    ];

    /**
     * @return ModelOpinions|null
     */
    public function getOpinions()
    {
        return $this->opinions;
    }
}
