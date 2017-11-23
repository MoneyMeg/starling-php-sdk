<?php

namespace Starling\Tests;

class MerchantsTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testMerchantRequest()
    {
        $request = new \Starling\Api\Request\Merchants('test-id');
        $this->isValidRequest($request);
    }

    public function testMerchantLocationRequest()
    {
        $request = new \Starling\Api\Request\Merchants\Location([
            'merchant_id' => 'test-id',
            'merchant_location_id' => 'test-id'
        ]);
        $this->isValidRequest($request);
    }

    /**
     * @expectedException Starling\Exception\RequiredValuesMissing
     */
    public function testMerchantLocationExceptionRequest()
    {
        $request = new \Starling\Api\Request\Merchants \Location([
            'merchant_id' => 'test-id'
        ]);
    }
}
