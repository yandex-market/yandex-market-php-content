<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class ModelInfo extends Model
{
    protected $alternatePrice;
    protected $category;
    protected $description;
    protected $facts;
    protected $filters;
    protected $id;
    protected $isNew;
    protected $kind;
    protected $lastUpdate;
    protected $link;
    protected $modificationCount;
    protected $modifications;
    protected $name;
    protected $navigationNode;
    protected $offerCount;
    protected $opinionCount;
    protected $parent;
    protected $photo;
    protected $photos;
    protected $price;
    protected $rating;
    protected $reviewCount;
    protected $specification;
    protected $type;
    protected $userRelated;
    protected $vendor;
    protected $warning;
    protected $warnings;

    protected $__type;

    protected $mappingClasses = [
        'photo' => Photo::class,
        'photos' => Photos::class,
        'category' => Category::class,
        'price' => Price::class,
        'alternatePrice' => Price::class,
        'vendor' => Vendor::class,
        'warnings' => Warnings::class,
        'filters' => Filters::class,
        'navigationNode' => ModelNavigationNode::class,
        'rating' => ModelRating::class,
        'modifications' => ModelModifications::class,
        'specification' => ModelSpecifications::class,
        'facts' => Facts::class,
    ];

    /**
     * Retrieve the type property
     *
     * @return String|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Retrieve the alternatePrice property
     *
     * @return Price|null
     */
    public function getAlternatePrice()
    {
        return $this->alternatePrice;
    }

    /**
     * Retrieve the category property
     *
     * @return Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Retrieve the description property
     *
     * @return String|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Retrieve the facts property
     *
     * @return Fact|null
     */
    public function getFacts()
    {
        return $this->facts;
    }

    /**
     * Retrieve the filters property
     *
     * @return Filter|null
     */
    public function getFilters()
    {
        return $this->filters;
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
     * Retrieve the isNew property
     *
     * @return Boolean|null
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Retrieve the kind property
     *
     * @return String|null
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Retrieve the lastUpdate property
     *
     * @return Integer|null
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Retrieve the link property
     *
     * @return String|null
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Retrieve the modificationCount property
     *
     * @return Integer|null
     */
    public function getModificationCount()
    {
        return $this->modificationCount;
    }

    /**
     * Retrieve the modifications property
     *
     * @return ModelModification|null
     */
    public function getModifications()
    {
        return $this->modifications;
    }

    /**
     * Retrieve the name property
     *
     * @return String|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Retrieve the navigationNode property
     *
     * @return ModelNavigationNode|null
     */
    public function getNavigationNode()
    {
        return $this->navigationNode;
    }

    /**
     * Retrieve the offerCount property
     *
     * @return Integer|null
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * Retrieve the opinionCount property
     *
     * @return Integer|null
     */
    public function getOpinionCount()
    {
        return $this->opinionCount;
    }

    /**
     * Retrieve the parent property
     *
     * @return Parent|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Retrieve the photo property
     *
     * @return Base\Photo|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Retrieve the photos property
     *
     * @return Photos|null
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Retrieve the price property
     *
     * @return Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Retrieve the rating property
     *
     * @return Rating|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Retrieve the reviewCount property
     *
     * @return Integer|null
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * Retrieve the specification property
     *
     * @return ModelSpecifications|null
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * Retrieve the userRelated property
     *
     * @return UserRelated|null
     */
    public function getUserRelated()
    {
        return $this->userRelated;
    }

    /**
     * Retrieve the vendor property
     *
     * @return Vendor|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Retrieve the warning property
     *
     * @return String|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Retrieve the warnings property
     *
     * @return CategoryWarning|null
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
}
