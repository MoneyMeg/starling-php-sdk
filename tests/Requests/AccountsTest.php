<?php

namespace Starling\Tests;

class AccountsTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testAccountsRequest()
    {
        $request = new \Starling\Api\Request\Accounts();
        $this->isValidRequest($request);
    }

    public function testAccountsBalanceRequest()
    {
        $request = new \Starling\Api\Request\Accounts();
        $this->isValidRequest($request);
    }
}
