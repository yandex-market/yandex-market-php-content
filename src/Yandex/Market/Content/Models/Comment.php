<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Comment extends Model
{
    protected $blocked;
    protected $body;
    protected $children;
    protected $deleted;
    protected $id;
    protected $parentId;
    protected $rootId;
    protected $sticky;
    protected $title;
    protected $updateTimestamp;
    protected $user;
    protected $valid;

    protected $mappingClasses = [
        'user' => User::class,
        'children' => Comment::class,
    ];

    /**
     * Retrieve the blocked property
     *
     * @return Boolean|null
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Retrieve the body property
     *
     * @return String|null
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Retrieve the children property
     *
     * @return Children|null
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Retrieve the deleted property
     *
     * @return Boolean|null
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Retrieve the id property
     *
     * @return String|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the parentId property
     *
     * @return String|null
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Retrieve the rootId property
     *
     * @return String|null
     */
    public function getRootId()
    {
        return $this->rootId;
    }

    /**
     * Retrieve the sticky property
     *
     * @return Boolean|null
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Retrieve the title property
     *
     * @return String|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Retrieve the updateTimestamp property
     *
     * @return String|null
     */
    public function getUpdateTimestamp()
    {
        return $this->updateTimestamp;
    }

    /**
     * Retrieve the user property
     *
     * @return User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Retrieve the valid property
     *
     * @return Boolean|null
     */
    public function getValid()
    {
        return $this->valid;
    }
}
