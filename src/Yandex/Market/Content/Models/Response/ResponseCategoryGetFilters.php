<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\Filters;

class ResponseCategoryGetFilters extends PagedModel
{
    protected $filters;

    protected $mappingClasses = [
        'filters' => Filters::class,
    ];

    /**
     * Retrieve the filters property
     *
     * @return Filters|null
     */
    public function getFilters()
    {
        return $this->filters;
    }
}
