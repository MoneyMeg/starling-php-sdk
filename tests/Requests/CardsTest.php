<?php

namespace Starling\Tests;

class CardsTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testCardsRequest()
    {
        $request = new \Starling\Api\Request\Cards();
        $this->isValidRequest($request);
    }
}
