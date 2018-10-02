<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\Category;

class ResponseCategoryGet extends ContextModel
{
    protected $category = null;

    protected $mappingClasses = [
        'category' => Category::class,
    ];

    /**
     * Retrieve the categories property
     *
     * @return Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }
}
