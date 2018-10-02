<?php


namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class PhotoPreviews extends ObjectModel
{
    /**
     * Add preview to collection
     *
     * @param PhotoPreview|array $option
     *
     * @return PhotoPreviews
     */
    public function add($preview)
    {
        if (is_array($preview)) {
            $this->collection[] = new PhotoPreview($preview);
        } elseif (is_object($preview) && $preview instanceof PhotoPreview) {
            $this->collection[] = $preview;
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
