<?php

namespace Starling\Tests;

class CustomersTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testCustomerRequest()
    {
        $request = new \Starling\Api\Request\Customer();
        $this->isValidRequest($request);
    }
}
