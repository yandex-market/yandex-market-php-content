<?php
/**
 * @namespace
 */

namespace Yandex\Tests\Market;

use GuzzleHttp\Psr7\Response;
use Yandex\Market\Content\Clients\ModelClient;
use Yandex\Market\Content\Models\Fact;
use Yandex\Market\Content\Models\ModelInfo;
use Yandex\Market\Content\Models\ModelOpinion;
use Yandex\Market\Content\Models\Offer;
use Yandex\Market\Content\Models\Outlet;
use Yandex\Tests\TestCase;

/**
 * PackageTest
 *
 * @category Yandex
 * @package  Tests
 *
 * @author   Oleg Scherbakov <holdmann@yandex.ru>
 * @created  05.01.2016 19:12
 */
class ModelClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    function testGetMatch()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/modelsMatch.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $modelClientMock = $this->getMockBuilder(ModelClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $modelClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedModels = $modelClientMock->getMatch([
            'geo_id' => 225,
            'text' => 'Мос',
        ]);

        $items = $matchedModels->getItems();
        $itemsCount = $items->count();

        /** @var Offer|ModelInfo $item */
        $item = $items->current();

        for ($i = 0; $i < $itemsCount; $i++) {
            if ($jsonObj->items[$i]->__type === 'model') {
                $this->assertEquals(
                    $jsonObj->items[$i]->id,
                    $item->getId()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->name,
                    $item->getName()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->type,
                    $item->getType()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->kind,
                    $item->getKind()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->isNew,
                    $item->getIsNew()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->description,
                    $item->getDescription()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->link,
                    $item->getLink()
                );
            } else if ($jsonObj->items[$i]->__type === 'offer') {
                $this->assertEquals(
                    $jsonObj->items[$i]->id,
                    $item->getId()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->wareMd5,
                    $item->getWareMd5()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->name,
                    $item->getName()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->description,
                    $item->getDescription()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->price->value,
                    $item->getPrice()->getValue()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->url,
                    $item->getUrl()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->onStock,
                    $item->getOnStock()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->warranty,
                    $item->getWarranty()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->recommended,
                    $item->getRecommended()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->link,
                    $item->getLink()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->paymentOptions->canPayByCard,
                    $item->getPaymentOptions()->getCanPayByCard()
                );
            }

            $item = $items->next();
        }
    }

    function testGet()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/model.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $modelClientMock = $this->getMockBuilder(ModelClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $modelClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedModels = $modelClientMock->get(37981612, [
            'geo_id' => 225,
        ]);

        $model = $matchedModels->getModel();

        /* @var ModelInfo $model */

        $this->assertEquals(
            $jsonObj->model->id,
            $model->getId()
        );
        $this->assertEquals(
            $jsonObj->model->name,
            $model->getName()
        );
        $this->assertEquals(
            $jsonObj->model->kind,
            $model->getKind()
        );
        $this->assertEquals(
            $jsonObj->model->type,
            $model->getType()
        );
        $this->assertEquals(
            $jsonObj->model->isNew,
            $model->getIsNew()
        );
        $this->assertEquals(
            $jsonObj->model->description,
            $model->getDescription()
        );
        $this->assertEquals(
            $jsonObj->model->link,
            $model->getLink()
        );

        /* Photo */
        $this->assertEquals(
            $jsonObj->model->photo->width,
            $model->getPhoto()->getWidth()
        );
        $this->assertEquals(
            $jsonObj->model->photo->height,
            $model->getPhoto()->getHeight()
        );
        $this->assertEquals(
            $jsonObj->model->photo->url,
            $model->getPhoto()->getUrl()
        );

        /* Category */
        $this->assertEquals(
            $jsonObj->model->category->id,
            $model->getCategory()->getId()
        );
        $this->assertEquals(
            $jsonObj->model->category->fullName,
            $model->getCategory()->getFullName()
        );
        $this->assertEquals(
            $jsonObj->model->category->name,
            $model->getCategory()->getName()
        );
        $this->assertEquals(
            $jsonObj->model->category->childCount,
            $model->getCategory()->getChildCount()
        );
        $this->assertEquals(
            $jsonObj->model->category->advertisingModel,
            $model->getCategory()->getAdvertisingModel()
        );
        $this->assertEquals(
            $jsonObj->model->category->viewType,
            $model->getCategory()->getViewType()
        );
    }

    public function testGetOpinions()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/modelOpinions.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $modelClientMock = $this->getMockBuilder(ModelClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $modelClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedModels = $modelClientMock->getOpinions(37981612, [
            'geo_id' => 225,
        ]);

        $opinions = $matchedModels->getOpinions();
        $opinionsCount = $opinions->count();

        /* @var ModelOpinion $opinion */
        $opinion = $opinions->current();

        for ($i = 0; $i < $opinionsCount; $i++) {

            $this->assertEquals(
                $jsonObj->opinions[$i]->id,
                $opinion->getId()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->date,
                $opinion->getDate()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->grade,
                $opinion->getGrade()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->state,
                $opinion->getState()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->agreeCount,
                $opinion->getAgreeCount()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->disagreeCount,
                $opinion->getDisagreeCount()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->pros,
                $opinion->getPros()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->recommend,
                $opinion->getRecommend()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->usageTime,
                $opinion->getUsageTime()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->verifiedBuyer,
                $opinion->getVerifiedBuyer()
            );


            /* Author */
            $this->assertEquals(
                $jsonObj->opinions[$i]->author->name,
                $opinion->getAuthor()->getName()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->author->avatarUrl,
                $opinion->getAuthor()->getAvatarUrl()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->author->grades,
                $opinion->getAuthor()->getGrades()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->author->visibility,
                $opinion->getAuthor()->getVisibility()
            );

            /* Region */
            $this->assertEquals(
                $jsonObj->opinions[$i]->region->id,
                $opinion->getRegion()->getId()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->region->name,
                $opinion->getRegion()->getName()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->region->type,
                $opinion->getRegion()->getType()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->region->childCount,
                $opinion->getRegion()->getChildCount()
            );

            /* Region child */

            $this->assertEquals(
                $jsonObj->opinions[$i]->region->country->id,
                $opinion->getRegion()->getCountry()->getId()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->region->country->name,
                $opinion->getRegion()->getCountry()->getName()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->region->country->type,
                $opinion->getRegion()->getCountry()->getType()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->region->country->childCount,
                $opinion->getRegion()->getCountry()->getChildCount()
            );

            /* Facts */

            $facts = $opinion->getFacts();
            /* @var Fact $fact */
            $fact = $facts->current();

            for ($y = 0; $y < $facts->count(); $y++) {

                $this->assertEquals(
                    $jsonObj->opinions[$i]->facts[$y]->id,
                    $fact->getId()
                );
                $this->assertEquals(
                    $jsonObj->opinions[$i]->facts[$y]->value,
                    $fact->getValue()
                );
                $this->assertEquals(
                    $jsonObj->opinions[$i]->facts[$y]->title,
                    $fact->getTitle()
                );

                $fact = $facts->next();
            }

            $opinion = $opinions->next();
        }
    }

    public function testGetPopular()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/modelPopular.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $modelClientMock = $this->getMockBuilder(ModelClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $modelClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedModels = $modelClientMock->getPopular(37981612, [
            'geo_id' => 225,
        ]);

        $models = $matchedModels->getModels();
        $modelsCount = $models->count();


        /* @var ModelInfo $model */
        $model = $models->current();

        for ($i = 0; $i < $modelsCount; $i++) {
            $this->assertEquals(
                $jsonObj->models[$i]->id,
                $model->getId()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->name,
                $model->getName()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->kind,
                $model->getKind()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->type,
                $model->getType()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->isNew,
                $model->getIsNew()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->description,
                $model->getDescription()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->link,
                $model->getLink()
            );

            /* Photo */
            $this->assertEquals(
                $jsonObj->models[$i]->photo->width,
                $model->getPhoto()->getWidth()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->photo->height,
                $model->getPhoto()->getHeight()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->photo->url,
                $model->getPhoto()->getUrl()
            );

            /* Category */
            $this->assertEquals(
                $jsonObj->models[$i]->category->id,
                $model->getCategory()->getId()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->category->fullName,
                $model->getCategory()->getFullName()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->category->name,
                $model->getCategory()->getName()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->category->childCount,
                $model->getCategory()->getChildCount()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->category->advertisingModel,
                $model->getCategory()->getAdvertisingModel()
            );
            $this->assertEquals(
                $jsonObj->models[$i]->category->viewType,
                $model->getCategory()->getViewType()
            );

            $model = $models->next();
        }
    }

    public function testGetReviews()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/modelReviews.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $modelClientMock = $this->getMockBuilder(ModelClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $modelClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));


        $matchedModels = $modelClientMock->getReviews(37981612, [
            'geo_id' => 225,
        ]);

        $reviews = $matchedModels->getReviews();
        $review = $reviews->current();

        $this->assertEquals(
            $jsonObj->reviews[0]->url,
            $review->getUrl()
        );

        $this->assertEquals(
            $jsonObj->reviews[0]->title,
            $review->getTitle()
        );

        $this->assertEquals(
            $jsonObj->reviews[0]->favIcon,
            $review->getFavIcon()
        );
    }

    public function testGetOutlets()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/modelOutlets.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $modelClientMock = $this->getMockBuilder(ModelClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $modelClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));


        $matchedModels = $modelClientMock->getOutlets(37981612, [
            'geo_id' => 225,
        ]);

        $outlets = $matchedModels->getOutlets();
        $outletsCount = $outlets->count();

        /* @var Outlet $outlet */
        $outlet = $outlets->current();

        for ($i = 0; $i < $outletsCount; $i++) {
            $this->assertEquals(
                $jsonObj->outlets[$i]->id,
                $outlet->getId()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->name,
                $outlet->getName()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->type,
                $outlet->getType()
            );

            /* Address */
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->regionId,
                $outlet->getAddress()->getRegionId()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->locality,
                $outlet->getAddress()->getLocality()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->thoroughfare,
                $outlet->getAddress()->getThoroughfare()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->premiseNumber,
                $outlet->getAddress()->getPremiseNumber()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->fullAddress,
                $outlet->getAddress()->getFullAddress()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->note,
                $outlet->getAddress()->getNote()
            );

            /* Address->GeoPoint */
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->geoPoint->coordinates->latitude,
                $outlet->getAddress()->getGeoPoint()->getCoordinates()->getLatitude()
            );
            $this->assertEquals(
                $jsonObj->outlets[$i]->address->geoPoint->coordinates->longitude,
                $outlet->getAddress()->getGeoPoint()->getCoordinates()->getLongitude()
            );

            $outlet = $outlets->next();
        }
    }

    public function testGetOffers()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/modelOffers.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $modelClientMock = $this->getMockBuilder(ModelClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $modelClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));


        $matchedModels = $modelClientMock->getOffers(37981612, [
            'geo_id' => 225,
        ]);

        $offers = $matchedModels->getOffers();
        $offersCount = $offers->count();

        /* @var Offer $offer */
        $offer = $offers->current();

        for ($i = 0; $i < $offersCount; $i++) {
            $this->assertEquals(
                $jsonObj->offers[$i]->id,
                $offer->getId()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->wareMd5,
                $offer->getWareMd5()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->name,
                $offer->getName()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->description,
                $offer->getDescription()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->price->value,
                $offer->getPrice()->getValue()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->cpa,
                $offer->getCpa()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->url,
                $offer->getUrl()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->model->id,
                $offer->getModel()->getId()
            );

            $this->assertEquals(
                $jsonObj->offers[$i]->warranty,
                $offer->getWarranty()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->recommended,
                $offer->getRecommended()
            );
            $this->assertEquals(
                $jsonObj->offers[$i]->link,
                $offer->getLink()
            );

            $this->assertEquals(
                $jsonObj->offers[$i]->paymentOptions->canPayByCard,
                $offer->getPaymentOptions()->getCanPayByCard()
            );

            if (isset($jsonObj->offers[$i]->phone)) {
                $this->assertEquals(
                    $jsonObj->offers[$i]->phone->number,
                    $offer->getPhone()->getNumber()
                );

                $this->assertEquals(
                    $jsonObj->offers[$i]->phone->sanitized,
                    $offer->getPhone()->getSanitized()
                );
            }

            $offer = $offers->next();
        }
    }
}
