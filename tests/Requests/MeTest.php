<?php

namespace Starling\Tests;

class MeTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testMeRequest()
    {
        $request = new \Starling\Api\Request\Me();
        $this->isValidRequest($request);
    }
}
