<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class ModelNavigationNodeIcons extends ObjectModel
{
    /**
     * Add opinion to collection
     *
     * @param ModelNavigationNodeIcons|array $opinion
     *
     * @return ModelNavigationNodeIcons
     */
    public function add($icons)
    {
        if (is_array($icons)) {
            $this->collection[] = new ModelNavigationNodeIcon($icons);
        } elseif (is_object($icons) && $icons instanceof ModelNavigationNodeIcon) {
            $this->collection[] = $icons;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return array|null
     */
    public function getAll()
    {
        return $this->collection;
    }
}
