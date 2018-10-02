<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\Categories;

class ResponseCategoryGetList extends PagedModel
{
    protected $categories;

    protected $mappingClasses = [
        'categories' => Categories::class,
    ];

    /**
     * Retrieve the categories property
     *
     * @return Categories|null
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
