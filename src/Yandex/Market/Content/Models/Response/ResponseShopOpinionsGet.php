<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\ShopOpinions;

class ResponseShopOpinionsGet extends PagedModel
{
    protected $opinions;

    protected $mappingClasses = [
        'opinions' => ShopOpinions::class,
    ];

    /**
     * Retrieve opinions property
     *
     * @return ShopOpinions|null
     */
    public function getOpinions()
    {
        return $this->opinions;
    }
}
