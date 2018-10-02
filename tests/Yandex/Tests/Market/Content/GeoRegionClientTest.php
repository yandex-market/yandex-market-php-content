<?php
/**
 * @namespace
 */

namespace Yandex\Tests\Market;

use GuzzleHttp\Psr7\Response;
use Yandex\Market\Content\Clients\GeoRegionClient;
use Yandex\Market\Content\Models\GeoRegion;
use Yandex\Market\Content\Models\GeoRegions;
use Yandex\Tests\TestCase;

/**
 * PackageTest
 *
 * @category Yandex
 * @package  Tests
 *
 * @author   Oleg Scherbakov <holdmann@yandex.ru>
 * @created  08.01.2016 02:20
 */
class GeoRegionClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    function testGetList()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/geoRegionList.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $geoRegionClientMock = $this->getMockBuilder(GeoRegionClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $geoRegionClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $geoRegionsResponse = $geoRegionClientMock->getList();


        /* Page test */
        $this->assertEquals(
            $jsonObj->context->page->total,
            $geoRegionsResponse->getTotal()
        );
        $this->assertEquals(
            $jsonObj->context->page->number,
            $geoRegionsResponse->getNumber()
        );
        $this->assertEquals(
            null,
            $geoRegionsResponse->getLast()
        );
        $this->assertEquals(
            $jsonObj->context->page->count,
            $geoRegionsResponse->getCount()
        );

        /** @var GeoRegions $regions */
        $regions = $geoRegionsResponse->getRegions();
        $regionsCount = $geoRegionsResponse->getCount();

        /** @var GeoRegion $region */
        $region = $regions->current();

        for ($i = 0; $i < $regionsCount; $i++) {
            $this->assertEquals(
                $jsonObj->regions[$i]->id,
                $region->getId()
            );
            $this->assertEquals(
                $jsonObj->regions[$i]->childCount,
                $region->getChildCount()
            );
            $this->assertEquals(
                $jsonObj->regions[$i]->type,
                $region->getType()
            );
            $this->assertEquals(
                $jsonObj->regions[$i]->name,
                $region->getName()
            );


            /* Country tests */

            $this->assertEquals(
                $jsonObj->regions[$i]->country->name,
                $region->getCountry()->getName()
            );

            $this->assertEquals(
                $jsonObj->regions[$i]->country->id,
                $region->getCountry()->getId()
            );

            $this->assertEquals(
                $jsonObj->regions[$i]->country->type,
                $region->getCountry()->getType()
            );

            $this->assertEquals(
                $jsonObj->regions[$i]->country->childCount,
                $region->getCountry()->getChildCount()
            );

            $region = $regions->next();
        }
    }

    function testGet()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/geoRegion.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $geoRegionClientMock = $this->getMockBuilder(GeoRegionClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $geoRegionClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $geoRegionResponse = $geoRegionClientMock->get(225);

        /** @var GeoRegion $region */
        $region = $geoRegionResponse->getGeoRegion();
        $this->assertEquals(
            $jsonObj->region->id,
            $region->getId()
        );
        $this->assertEquals(
            $jsonObj->region->type,
            $region->getType()
        );
        $this->assertEquals(
            $jsonObj->region->name,
            $region->getName()
        );
        $this->assertEquals(
            $jsonObj->region->childCount,
            $region->getChildCount()
        );

        /* Country tests */

        $country = $region->getCountry();
        $this->assertEquals(
            $jsonObj->region->country->id,
            $country->getId()
        );
        $this->assertEquals(
            $jsonObj->region->country->type,
            $country->getType()
        );
        $this->assertEquals(
            $jsonObj->region->country->name,
            $country->getName()
        );
        $this->assertEquals(
            $jsonObj->region->country->childCount,
            $country->getChildCount()
        );
    }

    function testGetChildren()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/geoRegionChildren.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $geoRegionClientMock = $this->getMockBuilder(GeoRegionClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $geoRegionClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $geoRegionsResponse = $geoRegionClientMock->getChildren(225);

        /* Page test */
        $this->assertEquals(
            $jsonObj->context->page->total,
            $geoRegionsResponse->getTotal()
        );
        $this->assertEquals(
            $jsonObj->context->page->number,
            $geoRegionsResponse->getNumber()
        );
        $this->assertEquals(
            null,
            $geoRegionsResponse->getLast()
        );
        $this->assertEquals(
            $jsonObj->context->page->count,
            $geoRegionsResponse->getCount()
        );

        /** @var GeoRegions $regions */
        $regions = $geoRegionsResponse->getRegions();
        $regionsCount = $geoRegionsResponse->getCount();

        /** @var GeoRegion $region */
        $region = $regions->current();

        for ($i = 0; $i < $regionsCount; $i++) {
            $this->assertEquals(
                $jsonObj->regions[$i]->id,
                $region->getId()
            );
            $this->assertEquals(
                $jsonObj->regions[$i]->childCount,
                $region->getChildCount()
            );
            $this->assertEquals(
                $jsonObj->regions[$i]->type,
                $region->getType()
            );
            $this->assertEquals(
                $jsonObj->regions[$i]->name,
                $region->getName()
            );


            /* Country tests */

            $this->assertEquals(
                $jsonObj->regions[$i]->country->name,
                $region->getCountry()->getName()
            );

            $this->assertEquals(
                $jsonObj->regions[$i]->country->id,
                $region->getCountry()->getId()
            );

            $this->assertEquals(
                $jsonObj->regions[$i]->country->type,
                $region->getCountry()->getType()
            );

            $this->assertEquals(
                $jsonObj->regions[$i]->country->childCount,
                $region->getCountry()->getChildCount()
            );

            $region = $regions->next();
        }
    }

    function testGetMatch()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/geoRegionSuggest.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $geoRegionClientMock = $this->getMockBuilder(GeoRegionClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $geoRegionClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $geoRegionsMatch = $geoRegionClientMock->getMatch(['part_name' => 'мос']);

        /* Page test */
        $this->assertEquals(
            $jsonObj->context->page->total,
            $geoRegionsMatch->getTotal()
        );
        $this->assertEquals(
            $jsonObj->context->page->number,
            $geoRegionsMatch->getNumber()
        );
        $this->assertEquals(
            null,
            $geoRegionsMatch->getLast()
        );
        $this->assertEquals(
            $jsonObj->context->page->count,
            $geoRegionsMatch->getCount()
        );


        /** @var GeoRegions $regions */
        $regions = $geoRegionsMatch->getSuggests();

        /** @var GeoRegion $region */
        $region = $regions->current();
        $regionCount = $regions->count();

        for ($i = 0; $i < $regionCount; $i++) {
            $this->assertEquals(
                $jsonObj->suggests[$i]->id,
                $region->getId()
            );

            $this->assertEquals(
                $jsonObj->suggests[$i]->name,
                $region->getName()
            );

            $this->assertEquals(
                $jsonObj->suggests[$i]->type,
                $region->getType()
            );

            $this->assertEquals(
                $jsonObj->suggests[$i]->childCount,
                $region->getChildCount()
            );

            $this->assertEquals(
                $jsonObj->suggests[$i]->fullName,
                $region->getFullName()
            );

            $region = $regions->next();
        }
    }
}
