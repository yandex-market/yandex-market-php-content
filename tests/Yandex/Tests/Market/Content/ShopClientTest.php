<?php


namespace Yandex\Tests\Market;

use GuzzleHttp\Psr7\Response;
use Yandex\Market\Content\Clients\ShopClient;
use Yandex\Market\Content\Models\Shop;
use Yandex\Market\Content\Models\ShopOpinion;
use Yandex\Tests\TestCase;


/**
 * PackageTest
 *
 * @category Yandex
 * @package  Tests
 *
 * @author   Kirill Litvinov <Kirill.Litvinov@nixsolutions.com>
 * @created  03.08.2018 19:12
 */
class ShopClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    public function testGet()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/shopGet.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $shopClientMock = $this->getMockBuilder(ShopClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $shopClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedShop = $shopClientMock->get(90402);

        $shop = $matchedShop->getShop();

        /* @var Shop $shop */
        $this->assertEquals(
            $jsonObj->shop->id,
            $shop->getId()
        );
        $this->assertEquals(
            $jsonObj->shop->name,
            $shop->getName()
        );
        $this->assertEquals(
            $jsonObj->shop->domain,
            $shop->getDomain()
        );
        $this->assertEquals(
            $jsonObj->shop->registered,
            $shop->getRegistered()
        );
        $this->assertEquals(
            $jsonObj->shop->opinionUrl,
            $shop->getOpinionUrl()
        );

        /* Region */
        $shopRegion = $shop->getRegion();

        $this->assertEquals(
            $jsonObj->shop->region->name,
            $shopRegion->getName()
        );
        $this->assertEquals(
            $jsonObj->shop->region->id,
            $shopRegion->getId()
        );
        $this->assertEquals(
            $jsonObj->shop->region->type,
            $shopRegion->getType()
        );
        $this->assertEquals(
            $jsonObj->shop->region->childCount,
            $shopRegion->getChildCount()
        );

        /* Region country */

        $this->assertEquals(
            $jsonObj->shop->region->country->id,
            $shopRegion->getCountry()->getId()
        );
        $this->assertEquals(
            $jsonObj->shop->region->country->name,
            $shopRegion->getCountry()->getName()
        );
        $this->assertEquals(
            $jsonObj->shop->region->country->type,
            $shopRegion->getCountry()->getType()
        );
        $this->assertEquals(
            $jsonObj->shop->region->country->childCount,
            $shopRegion->getCountry()->getChildCount()
        );
    }

    public function testGetMatch()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/shopGetMatch.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $shopClientMock = $this->getMockBuilder(ShopClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $shopClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedShop = $shopClientMock->getMatch([
            'host' => 'www.oldi.ru',
        ]);

        $shops = $matchedShop->getShops();
        $shopsCount = $shops->count();

        /* @var Shop $shop */
        $shop = $shops->current();

        for ($i = 0; $i < $shopsCount; $i++) {
            $this->assertEquals(
                $jsonObj->shops[$i]->id,
                $shop->getId()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->name,
                $shop->getName()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->domain,
                $shop->getDomain()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->registered,
                $shop->getRegistered()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->opinionUrl,
                $shop->getOpinionUrl()
            );

            /* Region */
            $shopRegion = $shop->getRegion();

            $this->assertEquals(
                $jsonObj->shops[$i]->region->name,
                $shopRegion->getName()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->region->id,
                $shopRegion->getId()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->region->type,
                $shopRegion->getType()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->region->childCount,
                $shopRegion->getChildCount()
            );

            /* Region country */

            $this->assertEquals(
                $jsonObj->shops[$i]->region->country->id,
                $shopRegion->getCountry()->getId()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->region->country->name,
                $shopRegion->getCountry()->getName()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->region->country->type,
                $shopRegion->getCountry()->getType()
            );
            $this->assertEquals(
                $jsonObj->shops[$i]->region->country->childCount,
                $shopRegion->getCountry()->getChildCount()
            );

            $shop = $shops->next();
        }
    }

    public function testGetOpinions()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/shopOpinions.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $opinionClientMock = $this->getMockBuilder(ShopClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $opinionClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedOpinions = $opinionClientMock->getOpinions(12138);

        $opinions = $matchedOpinions->getOpinions();
        $opinionsCount = $opinions->count();

        /* @var ShopOpinion $opinion */
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
                $jsonObj->opinions[$i]->text,
                $opinion->getText()
            );

            $this->assertEquals(
                $jsonObj->opinions[$i]->recommend,
                $opinion->getRecommend()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->delivery,
                $opinion->getDelivery()
            );

            /* Shop */
            $this->assertEquals(
                $jsonObj->opinions[$i]->shop->id,
                $opinion->getShop()->getId()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->shop->name,
                $opinion->getShop()->getName()
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
            $this->assertEquals(
                null,
                $opinion->getAuthor()->getSocial()
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

            $opinion = $opinions->next();
        }
    }

    public function testGetOpinionsChronological()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/shopOpinions.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $opinionClientMock = $this->getMockBuilder(ShopClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $opinionClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedOpinions = $opinionClientMock->getOpinionsChronological(12138);

        $opinions = $matchedOpinions->getOpinions();
        $opinionsCount = $opinions->count();

        /* @var ShopOpinion $opinion */
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
                $jsonObj->opinions[$i]->text,
                $opinion->getText()
            );

            $this->assertEquals(
                $jsonObj->opinions[$i]->recommend,
                $opinion->getRecommend()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->delivery,
                $opinion->getDelivery()
            );

            /* Shop */
            $this->assertEquals(
                $jsonObj->opinions[$i]->shop->id,
                $opinion->getShop()->getId()
            );
            $this->assertEquals(
                $jsonObj->opinions[$i]->shop->name,
                $opinion->getShop()->getName()
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
            $this->assertEquals(
                null,
                $opinion->getAuthor()->getSocial()
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

            $opinion = $opinions->next();
        }
    }
}