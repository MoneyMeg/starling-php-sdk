<?php

namespace Starling\Tests;

use DateTime;

class TransactionsTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testTransactionsRequest()
    {
        $request = new \Starling\Api\Request\Transactions();
        $this->isValidRequest($request);
    }

    public function testTransactionRequest()
    {
        $request = new \Starling\Api\Request\Transactions('test-id');
        $this->isValidRequest($request);
    }

    public function testTransactionsDateRangeRequest()
    {
        $request = new \Starling\Api\Request\Transactions([
            'from' => new DateTime('-7 days ago'),
            'to'   => new DateTime(),
        ]);

        $this->isValidRequest($request);
    }
}
