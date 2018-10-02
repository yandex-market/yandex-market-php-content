<?php


namespace Yandex\Tests\Market;

use GuzzleHttp\Psr7\Response;
use Yandex\Market\Content\Clients\VendorClient;
use Yandex\Market\Content\Models\Vendor;
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
class VendorClientTest extends TestCase
{
    protected $fixturesFolder = 'fixtures';

    public function testGetList()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/vendors.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $vendorClientMock = $this->getMockBuilder(VendorClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $vendorClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        //return;
        $matchedVendors = $vendorClientMock->getList();


        $vendors = $matchedVendors->getVendors();
        $vendorsCount = $vendors->count();

        /* @var Vendor $vendor */
        $vendor = $vendors->current();

        for ($i = 0; $i < $vendorsCount; $i++) {
            $this->assertEquals(
                $jsonObj->vendors[$i]->id,
                $vendor->getId()
            );
            $this->assertEquals(
                $jsonObj->vendors[$i]->name,
                $vendor->getName()
            );
            $vendor = $vendors->next();
        }
    }

    public function testGet()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/vendor.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $vendorClientMock = $this->getMockBuilder(VendorClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $vendorClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedVendor = $vendorClientMock->get(1042232);
        $vendor = $matchedVendor->getVendor();

        /* @var Vendor $vendor */
        $this->assertEquals(
            $jsonObj->vendor->id,
            $vendor->getId()
        );
        $this->assertEquals(
            $jsonObj->vendor->name,
            $vendor->getName()
        );
    }

    public function testGetMatch()
    {
        $json = file_get_contents(__DIR__ . '/' . $this->fixturesFolder . '/vendor.json');
        $jsonObj = json_decode($json);
        $response = new Response(200, [], \GuzzleHttp\Psr7\stream_for($json));

        $vendorClientMock = $this->getMockBuilder(VendorClient::class)
            ->setMethods(['sendRequest'])
            ->getMock();
        $vendorClientMock->expects($this->any())
            ->method('sendRequest')
            ->will($this->returnValue($response));

        $matchedVendor = $vendorClientMock->getMatch([
            'name' => 'Horizon'
        ]);
        $vendor = $matchedVendor->getVendor();

        /* @var Vendor $vendor */
        $this->assertEquals(
            $jsonObj->vendor->id,
            $vendor->getId()
        );
        $this->assertEquals(
            $jsonObj->vendor->name,
            $vendor->getName()
        );
    }
}