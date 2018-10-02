<?php

namespace Yandex\Market\Content\Models\Base;

class PagedModel extends ContextModel
{
    /**
     * Retrieve the number property
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->context->getPage()->getNumber();
    }

    /**
     * Retrieve the count property
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->context->getPage()->getCount();
    }

    /**
     * Retrieve the total property
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->context->getPage()->getTotal();
    }

    /**
     * Retrieve the items property
     *
     * @return int|null
     */
    public function getLast()
    {
        return $this->context->getPage()->getLast();
    }
}
