<?php
/**
 * @namespace
 */

namespace Yandex\Tests\Market;

use GuzzleHttp\Psr7\Response;
use Yandex\Market\Content\Clients\CategoryClient;
use Yandex\Market\Content\Models\Category;
use Yandex\Market\Content\Models\Filter;
use Yandex\Market\Content\Models\FilterValue;
use Yandex\Tests\TestCase;

/**
 * PackageTest
 *
 * @category Yandex
 * @package  Tests
 *
 * @author   Oleg Scherbakov <holdmann@yandex.ru>
 * @created  03.01.2016 17:31
 */
class CategoryClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    function testGetList()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/categoryList.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $categoryClientMock = $this->getMockBuilder(CategoryClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $categoryClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $categories = $categoryClientMock->getList(['geo_id' => 213, 'sort' => 'name']);


        /* Currency tests */
        $this->assertEquals(
            $jsonObj->context->currency->id,
            $categories->getCurrency()->getId()
        );

        $this->assertEquals(
            $jsonObj->context->currency->name,
            $categories->getCurrency()->getName()
        );

        /* Region  test */
        $region = $jsonObj->context->region;

        $this->assertEquals(
            $region->id,
            $categories->getRegion()->getId()
        );

        $this->assertEquals(
            $region->name,
            $categories->getRegion()->getName()
        );

        $this->assertEquals(
            $region->type,
            $categories->getRegion()->getType()
        );

        $this->assertEquals(
            $region->childCount,
            $categories->getRegion()->getChildCount()
        );


        /* Page tests */
        $this->assertEquals(
            $jsonObj->context->page->count,
            $categories->getCount()
        );

        $this->assertEquals(
            $jsonObj->context->page->total,
            $categories->getTotal()
        );

        $this->assertEquals(
            $jsonObj->context->page->last,
            $categories->getLast()
        );

        $this->assertEquals(
            $jsonObj->context->page->number,
            $categories->getNumber()
        );

        $items = $categories->getCategories();

        /** @var Category $item0 */
        $item = $items->current();

        for ($i = 0; $i < $items->count(); $i++) {
            $this->assertEquals(
                $jsonObj->categories[$i]->id,
                $item->getId()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->name,
                $item->getName()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->fullName,
                $item->getFullName()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->link,
                $item->getLink()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->childCount,
                $item->getChildCount()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->advertisingModel,
                $item->getAdvertisingModel()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->viewType,
                $item->getViewType()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->parent,
                $item->getParent()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->adult,
                $item->getAdult()
            );

            $item = $items->next();
        }

    }

    function testGet()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/category.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $categoryClientMock = $this->getMockBuilder(CategoryClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $categoryClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $category = $categoryClientMock->get(90402, ['geo_id' => 213]);

        $this->assertEquals(
            $jsonObj->category->adult,
            $category->getCategory()->getAdult()
        );
        $this->assertEquals(
            $jsonObj->category->advertisingModel,
            $category->getCategory()->getAdvertisingModel()
        );
        $this->assertEquals(
            $jsonObj->category->childCount,
            $category->getCategory()->getChildCount()
        );
        $this->assertEquals(
            $jsonObj->category->fullName,
            $category->getCategory()->getFullName()
        );
        $this->assertEquals(
            $jsonObj->category->id,
            $category->getCategory()->getId()
        );
        $this->assertEquals(
            $jsonObj->category->link,
            $category->getCategory()->getLink()
        );
        $this->assertEquals(
            $jsonObj->category->modelCount,
            $category->getCategory()->getModelCount()
        );
        $this->assertEquals(
            $jsonObj->category->name,
            $category->getCategory()->getName()
        );
        $this->assertEquals(
            $jsonObj->category->offerCount,
            $category->getCategory()->getOfferCount()
        );
        $this->assertEquals(
            $jsonObj->category->parent,
            $category->getCategory()->getParent()
        );
        $this->assertEquals(
            $jsonObj->category->viewType,
            $category->getCategory()->getViewType()
        );
    }

    function testGetChildren()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/categoryList.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $categoryClientMock = $this->getMockBuilder(CategoryClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $categoryClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $categories = $categoryClientMock->getChildren(25578, ['geo_id' => 213, 'sort' => 'name']);


        /* Currency tests */
        $this->assertEquals(
            $jsonObj->context->currency->id,
            $categories->getCurrency()->getId()
        );

        $this->assertEquals(
            $jsonObj->context->currency->name,
            $categories->getCurrency()->getName()
        );

        /* Region  test */
        $region = $jsonObj->context->region;

        $this->assertEquals(
            $region->id,
            $categories->getRegion()->getId()
        );

        $this->assertEquals(
            $region->name,
            $categories->getRegion()->getName()
        );

        $this->assertEquals(
            $region->type,
            $categories->getRegion()->getType()
        );

        $this->assertEquals(
            $region->childCount,
            $categories->getRegion()->getChildCount()
        );


        /* Page tests */
        $this->assertEquals(
            $jsonObj->context->page->count,
            $categories->getCount()
        );

        $this->assertEquals(
            $jsonObj->context->page->total,
            $categories->getTotal()
        );

        $this->assertEquals(
            $jsonObj->context->page->last,
            $categories->getLast()
        );

        $this->assertEquals(
            $jsonObj->context->page->number,
            $categories->getNumber()
        );

        $items = $categories->getCategories();

        /** @var Category $item0 */
        $item = $items->current();

        for ($i = 0; $i < $items->count(); $i++) {
            $this->assertEquals(
                $jsonObj->categories[$i]->id,
                $item->getId()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->name,
                $item->getName()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->fullName,
                $item->getFullName()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->link,
                $item->getLink()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->childCount,
                $item->getChildCount()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->advertisingModel,
                $item->getAdvertisingModel()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->viewType,
                $item->getViewType()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->parent,
                $item->getParent()
            );

            $this->assertEquals(
                $jsonObj->categories[$i]->adult,
                $item->getAdult()
            );

            $item = $items->next();
        }

    }

    function testGetFilters()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/categoryFilters.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $categoryClientMock = $this->getMockBuilder(CategoryClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $categoryClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $categoryFilters = $categoryClientMock->getFilters(90402212, [
            'geo_id' => 213,
            'filter_set' => 'basic',
            'description' => 1,
        ]);

        /* Currency tests */
        $this->assertEquals(
            $jsonObj->context->currency->id,
            $categoryFilters->getCurrency()->getId()
        );

        $this->assertEquals(
            $jsonObj->context->currency->name,
            $categoryFilters->getCurrency()->getName()
        );

        /* Region  test */
        $region = $jsonObj->context->region;

        $this->assertEquals(
            $region->id,
            $categoryFilters->getRegion()->getId()
        );

        $this->assertEquals(
            $region->name,
            $categoryFilters->getRegion()->getName()
        );

        $this->assertEquals(
            $region->type,
            $categoryFilters->getRegion()->getType()
        );

        $this->assertEquals(
            $region->childCount,
            $categoryFilters->getRegion()->getChildCount()
        );


        $filters = $categoryFilters->getFilters();

        /** @var Filter $filter0 */
        $filter0 = $filters->current();
        $this->assertEquals(
            $jsonObj->filters[0]->id,
            $filter0->getId()
        );
        $this->assertEquals(
            $jsonObj->filters[0]->name,
            $filter0->getName()
        );
        $this->assertEquals(
            $jsonObj->filters[0]->type,
            $filter0->getType()
        );

        /* @var FilterValue @filterValue0 */
        $filterValues = $filter0->getValues();
        $filterValue0 = $filterValues->current();

        for ($i = 0; $i < $filterValues->count(); $i++) {
            $this->assertEquals(
                $jsonObj->filters[0]->values[$i]->id,
                $filterValue0->getId()
            );

            $this->assertEquals(
                $jsonObj->filters[0]->values[$i]->name,
                $filterValue0->getName()
            );

            $this->assertEquals(
                $jsonObj->filters[0]->values[$i]->initialFound,
                $filterValue0->getInitialFound()
            );

            $this->assertEquals(
                $jsonObj->filters[0]->values[$i]->found,
                $filterValue0->getFound()
            );

            $filterValue0 = $filterValues->next();
        }
    }
}
