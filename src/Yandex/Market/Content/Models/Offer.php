<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\Model;

class Offer extends Model
{
    protected $activeFilters;
    protected $adult;
    protected $age;
    protected $alternatePrice;
    protected $cartLink;
    protected $category;
    protected $cpaUrl;
    protected $description;
    protected $id;
    protected $link;
    protected $localStoreCount;
    protected $name;
    protected $offersLink;
    protected $onStock;
    protected $outletCount;
    protected $outletUrl;
    protected $paymentOptions;
    protected $phone;
    protected $photo;
    protected $photos;
    protected $pickupCount;
    protected $previewPhotos;
    protected $price;
    protected $promocode;
    protected $recommended;
    protected $url;
    protected $variationCount;
    protected $wareMd5;
    protected $warning;
    protected $warnings;
    protected $warranty;

    protected $delivery;
    protected $shop;
    protected $vendor;
    protected $model;
    protected $cpa;

    protected $__type;


    protected $mappingClasses = [
        'category' => Category::class,
        'activeFiters' => Filter::class,
        'photos' => Photos::class,
        'photo' => Photo::class,
        'phone' => Phone::class,
        'previewPhotos' => PhotoPreviews::class,
        'warnings' => Warnings::class,
        'price' => Price::class,
        'alternatePrice' => Price::class,
        'paymentOptions' => OfferPaymentOptions::class,
        'model' => ModelInfo::class,
        'shop' => Shop::class,
        'vendor' => Vendor::class,
        'delivery' => Delivery::class,
    ];

    /**
     * Retrieve the activeFilters property
     *
     * @return Filter|null
     */
    public function getActiveFilters()
    {
        return $this->activeFilters;
    }

    /**
     * @return boolean
     */
    public function getCpa()
    {
        return $this->cpa;
    }


    /**
     * Retrieve the adult property
     *
     * @return Boolean|null
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Retrieve the age property
     *
     * @return String|null
     */
    public function getAge()
    {
        return $this->age;
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
     * Retrieve the cartLink property
     *
     * @return String|null
     */
    public function getCartLink()
    {
        return $this->cartLink;
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
     * Retrieve the cpaUrl property
     *
     * @return String|null
     */
    public function getCpaUrl()
    {
        return $this->cpaUrl;
    }

    /**
     * Retrieve the delivery property
     *
     * @return Delivery|null
     */
    public function getDelivery()
    {
        return $this->delivery;
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
     * Retrieve the id property
     *
     * @return String|null
     */
    public function getId()
    {
        return $this->id;
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
     * Retrieve the localStoreCount property
     *
     * @return Integer|null
     */
    public function getLocalStoreCount()
    {
        return $this->localStoreCount;
    }

    /**
     * Retrieve the model property
     *
     * @return ModelInfo|null
     */
    public function getModel()
    {
        return $this->model;
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
     * Retrieve the offersLink property
     *
     * @return String|null
     */
    public function getOffersLink()
    {
        return $this->offersLink;
    }

    /**
     * Retrieve the onStock property
     *
     * @return Boolean|null
     */
    public function getOnStock()
    {
        return $this->onStock;
    }

    /**
     * Retrieve the outletCount property
     *
     * @return Integer|null
     */
    public function getOutletCount()
    {
        return $this->outletCount;
    }

    /**
     * Retrieve the outletUrl property
     *
     * @return String|null
     */
    public function getOutletUrl()
    {
        return $this->outletUrl;
    }

    /**
     * Retrieve the paymentOptions property
     *
     * @return OfferPaymentOptions|null
     */
    public function getPaymentOptions()
    {
        return $this->paymentOptions;
    }

    /**
     * Retrieve the phone property
     *
     * @return Phone|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Retrieve the photo property
     *
     * @return Photo|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Retrieve the photos property
     *
     * @return Photo|null
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Retrieve the pickupCount property
     *
     * @return Integer|null
     */
    public function getPickupCount()
    {
        return $this->pickupCount;
    }

    /**
     * Retrieve the previewPhotos property
     *
     * @return PhotoPreviews|null
     */
    public function getPreviewPhotos()
    {
        return $this->previewPhotos;
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
     * Retrieve the promocode property
     *
     * @return Boolean|null
     */
    public function getPromocode()
    {
        return $this->promocode;
    }

    /**
     * Retrieve the recommended property
     *
     * @return Boolean|null
     */
    public function getRecommended()
    {
        return $this->recommended;
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
     * Retrieve the url property
     *
     * @return String|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Retrieve the variationCount property
     *
     * @return Integer|null
     */
    public function getVariationCount()
    {
        return $this->variationCount;
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
     * Retrieve the wareMd5 property
     *
     * @return String|null
     */
    public function getWareMd5()
    {
        return $this->wareMd5;
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
     * @return Warnings|null
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Retrieve the warranty property
     *
     * @return Boolean|null
     */
    public function getWarranty()
    {
        return $this->warranty;
    }
}
