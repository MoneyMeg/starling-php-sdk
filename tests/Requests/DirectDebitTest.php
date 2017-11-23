<?php

namespace Starling\Tests;

class DirectDebitTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testDirectDebitRequest()
    {
        $request = new \Starling\Api\Request\DirectDebits();
        $this->isValidRequest($request);
    }
}
