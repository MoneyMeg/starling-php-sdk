<?php

namespace Starling\Tests;

class AddressesTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testAddressesRequest()
    {
        $request = new \Starling\Api\Request\Addresses();
        $this->isValidRequest($request);
    }
}
