<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\ModelReviews;

class ResponseModelReviewsGet extends PagedModel
{
    protected $reviews;

    protected $mappingClasses = [
        'reviews' => ModelReviews::class,
    ];

    /**
     * @return ModelReviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }
}
