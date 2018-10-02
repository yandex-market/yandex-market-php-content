<?php

namespace Yandex\Market\Content\Models\Response;

use Yandex\Market\Content\Models\Base\ContextModel;
use Yandex\Market\Content\Models\SearchResults;

class ResponseModelMatchGet extends ContextModel
{
    protected $items;

    protected $mappingClasses = [
        'items' => SearchResults::class,
    ];

    /**
     * Retrieve the models property
     *
     * @return SearchResults|null
     */
    public function getItems()
    {
        return $this->items;
    }
}
