<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ShopOpinion extends Model
{
    protected $agreeCount;
    protected $author;
    protected $comments;
    protected $cons;
    protected $date;
    protected $delivery;
    protected $disagreeCount;
    protected $grade;
    protected $id;
    protected $problem;
    protected $pros;
    protected $region;
    protected $rejectReason;
    protected $shop;
    protected $shopOrderId;
    protected $state;
    protected $text;
    protected $vote;
    protected $recommend;

    protected $mappingClasses = [
        'author' => OpinionAuthor::class,
        'region' => GeoRegion::class,
        'shop' => Shop::class,
        'comments' => Comments::class,
    ];

    /**
     * Retrieve recommend property
     *
     * @return boolean
     */
    public function getRecommend()
    {
        return $this->recommend;
    }

    /**
     * Retrieve the agreeCount property
     *
     * @return Integer|null
     */
    public function getAgreeCount()
    {
        return $this->agreeCount;
    }

    /**
     * Retrieve the author property
     *
     * @return OpinionAuthor|null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Retrieve the comments property
     *
     * @return Comments|null
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Retrieve the cons property
     *
     * @return String|null
     */
    public function getCons()
    {
        return $this->cons;
    }

    /**
     * Retrieve the date property
     *
     * @return String|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Retrieve the delivery property
     *
     * @return String|null
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Retrieve the disagreeCount property
     *
     * @return Integer|null
     */
    public function getDisagreeCount()
    {
        return $this->disagreeCount;
    }

    /**
     * Retrieve the grade property
     *
     * @return Integer|null
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Retrieve the id property
     *
     * @return Integer|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the problem property
     *
     * @return String|null
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Retrieve the pros property
     *
     * @return String|null
     */
    public function getPros()
    {
        return $this->pros;
    }

    /**
     * Retrieve the region property
     *
     * @return GeoRegion|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Retrieve the rejectReason property
     *
     * @return String|null
     */
    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * Retrieve the shop property
     *
     * @return Shop|null
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Retrieve the shopOrderId property
     *
     * @return String|null
     */
    public function getShopOrderId()
    {
        return $this->shopOrderId;
    }

    /**
     * Retrieve the state property
     *
     * @return String|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Retrieve the text property
     *
     * @return String|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Retrieve the vote property
     *
     * @return String|null
     */
    public function getVote()
    {
        return $this->vote;
    }
}
