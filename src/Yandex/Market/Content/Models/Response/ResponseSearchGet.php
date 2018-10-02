<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\PagedModel;
use Yandex\Market\Content\Models\Categories;
use Yandex\Market\Content\Models\SearchResults;
use Yandex\Market\Content\Models\Sorts;

class ResponseSearchGet extends PagedModel
{
    protected $categories;
    protected $items;
    protected $sorts;

    protected $mappingClasses = [
        'items' => SearchResults::class,
        'categories' => Categories::class,
        'sorts' => Sorts::class,
    ];

    /**
     * Retrieve the items property
     *
     * @return SearchResults|null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Retrieve the sorts property
     *
     * @return Sorts|null
     */
    public function getSorts()
    {
        return $this->sorts;
    }

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
