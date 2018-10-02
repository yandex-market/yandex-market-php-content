<?php

namespace Yandex\Tests\Market\Content;


use GuzzleHttp\Psr7\Response;
use Yandex\Market\Content\Clients\SearchClient;
use Yandex\Market\Content\Models\ModelInfo;
use Yandex\Market\Content\Models\Offer;
use Yandex\Market\Content\Models\Sort;
use Yandex\Market\Content\Models\SortOption;
use Yandex\Tests\TestCase;

class SearchClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    public function testGet()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/searchGet.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $offerClientMock = $this->getMockBuilder(SearchClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $offerClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedItems = $offerClientMock->get([
            'geo_id' => 213,
            'text' => 'Мос',
        ]);

        $items = $matchedItems->getItems();
        $itemsCount = $items->count();


        $item = $items->current();
        for ($i = 0; $i < $itemsCount; $i++) {

            $this->assertEquals(
                $jsonObj->items[$i]->id,
                $item->getId()
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
                $jsonObj->items[$i]->link,
                $item->getLink()
            );

            if ($jsonObj->items[$i]->__type === 'model') {
                /* @var ModelInfo $item */
                $this->assertEquals(
                    $jsonObj->items[$i]->kind,
                    $item->getKind()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->isNew,
                    $item->getIsNew()
                );
            } else if ($jsonObj->items[$i]->__type === 'offer') {
                /* @var Offer $item */
                $this->assertEquals(
                    $jsonObj->items[$i]->wareMd5,
                    $item->getWareMd5()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->price->value,
                    $item->getPrice()->getValue()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->cpa,
                    $item->getCpa()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->url,
                    $item->getUrl()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->phone->number,
                    $item->getPhone()->getNumber()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->phone->sanitized,
                    $item->getPhone()->getSanitized()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->phone->call,
                    $item->getPhone()->getCall()
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
                    $jsonObj->items[$i]->paymentOptions->canPayByCard,
                    $item->getPaymentOptions()->getCanPayByCard()
                );
            }
            $item = $items->next();
        }

    }

    public function testGetFilterCategory()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/searchGetCategories.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $offerClientMock = $this->getMockBuilder(SearchClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $offerClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedItems = $offerClientMock->getFilterCategory(90402, [
            'geo_id' => 213,
            'text' => 'Мос',
        ]);

        $items = $matchedItems->getItems();
        $itemsCount = $items->count();


        $item = $items->current();

        for ($i = 0; $i < $itemsCount; $i++) {

            $this->assertEquals(
                $jsonObj->items[$i]->id,
                $item->getId()
            );
            $this->assertEquals(
                $jsonObj->items[$i]->name,
                $item->getName()
            );
            $this->assertEquals(
                $jsonObj->items[$i]->description,
                $item->getDescription()
            );

            if ($jsonObj->items[$i]->__type === 'model') {
                /* @var ModelInfo $item */
                $this->assertEquals(
                    $jsonObj->items[$i]->kind,
                    $item->getKind()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->isNew,
                    $item->getIsNew()
                );
            } else if ($jsonObj->items[$i]->__type === 'offer') {
                /* @var Offer $item */
                $this->assertEquals(
                    $jsonObj->items[$i]->wareMd5,
                    $item->getWareMd5()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->price->value,
                    $item->getPrice()->getValue()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->cpa,
                    $item->getCpa()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->url,
                    $item->getUrl()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->phone->number,
                    $item->getPhone()->getNumber()
                );
                $this->assertEquals(
                    $jsonObj->items[$i]->phone->sanitized,
                    $item->getPhone()->getSanitized()
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
                    $jsonObj->items[$i]->paymentOptions->canPayByCard,
                    $item->getPaymentOptions()->getCanPayByCard()
                );
            }
            $item = $items->next();
        }

        $sorts = $matchedItems->getSorts();
        $sortsCount = $sorts->count();

        /* @var Sort $sort */
        $sort = $sorts->current();

        for ($i = 0; $i < $sortsCount; $i++) {
            $this->assertEquals(
                $jsonObj->sorts[$i]->text,
                $sort->getText()
            );


            $options = $sort->getOptions();
            $optionsCount = $options->count();

            /* @var SortOption $option */
            $option = $options->current();

            for ($y = 0; $y < $optionsCount; $y++) {
                if (!empty($jsonObj->sorts[$i]->options[$y])) {
                    $this->assertEquals(
                        $jsonObj->sorts[$i]->options[$y]->id,
                        $option->getId()
                    );
                    $this->assertEquals(
                        $jsonObj->sorts[$i]->options[$y]->text,
                        $option->getText()
                    );
                    $this->assertEquals(
                        $jsonObj->sorts[$i]->options[$y]->how,
                        $option->getHow()
                    );

                }
                $option = $options->next();
            }
            $sort = $sorts->next();
        }
    }
}