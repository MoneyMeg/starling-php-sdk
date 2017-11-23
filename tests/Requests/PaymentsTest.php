<?php

namespace Starling\Tests;

class PaymentsTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testPaymentsRequest()
    {
        $request = new \Starling\Api\Request\Payments();
        $this->isValidRequest($request);
    }
}
