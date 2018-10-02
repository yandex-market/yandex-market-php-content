<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Sort extends Model
{
    protected $text;
    protected $field;
    protected $options;

    protected $mappingClasses = [
        'options' => SortOptions::class,
    ];

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return SortOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
