<?php


namespace Yandex\Tests\Market;

use GuzzleHttp\Psr7\Response;
use Yandex\Market\Content\Clients\OfferClient;
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
class OfferClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    public function testGet()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/offer.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $offerClientMock = $this->getMockBuilder(OfferClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $offerClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedOffer = $offerClientMock->get('yDpJekrrgZHrPBiKrOLLqyGP7FDMPJeMUUse4F5KEAZKG1IYcGvOFw', [
            'geo_id' => 213,
        ]);

        $offer = $matchedOffer->getOffer();

        $this->assertEquals(
            $jsonObj->offer->id,
            $offer->getId()
        );
        $this->assertEquals(
            $jsonObj->offer->wareMd5,
            $offer->getWareMd5()
        );
        $this->assertEquals(
            $jsonObj->offer->name,
            $offer->getName()
        );
        $this->assertEquals(
            $jsonObj->offer->description,
            $offer->getDescription()
        );
        $this->assertEquals(
            $jsonObj->offer->price->value,
            $offer->getPrice()->getValue()
        );
        $this->assertEquals(
            $jsonObj->offer->cpa,
            $offer->getCpa()
        );
        $this->assertEquals(
            $jsonObj->offer->url,
            $offer->getUrl()
        );
        $this->assertEquals(
            $jsonObj->offer->outletUrl,
            $offer->getOutletUrl()
        );
        $this->assertEquals(
            $jsonObj->offer->model->id,
            $offer->getModel()->getId()
        );
        $this->assertEquals(
            $jsonObj->offer->onStock,
            $offer->getOnStock()
        );
        $this->assertEquals(
            $jsonObj->offer->phone->number,
            $offer->getPhone()->getNumber()
        );
        $this->assertEquals(
            $jsonObj->offer->phone->sanitized,
            $offer->getPhone()->getSanitized()
        );
        $this->assertEquals(
            $jsonObj->offer->warranty,
            $offer->getWarranty()
        );
        $this->assertEquals(
            $jsonObj->offer->recommended,
            $offer->getRecommended()
        );
        $this->assertEquals(
            $jsonObj->offer->paymentOptions->canPayByCard,
            $offer->getPaymentOptions()->getCanPayByCard()
        );
    }
}