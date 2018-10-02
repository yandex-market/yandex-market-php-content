<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class SearchResults extends ObjectModel
{
    /**
     * Add category to collection
     *
     * @param ModelInfo|Offer|array $searchResult
     *
     * @return SearchResults
     */
    public function add($searchResult)
    {
        if (is_array($searchResult)) {
            if ($searchResult['__type'] === 'model') {
                $this->collection[] = new ModelInfo($searchResult);
            }

            if ($searchResult['__type'] === 'offer') {
                $this->collection[] = new Offer($searchResult);
            }
        } elseif (is_object($searchResult) && ($searchResult instanceof ModelInfo || $searchResult instanceof Offer)
        ) {
            $this->collection[] = $searchResult;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return array
     */
    public function getAll()
    {
        return $this->collection;
    }
}
