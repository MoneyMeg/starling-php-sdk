<?php

namespace Starling\Tests;

use DateTime;

class TransactionsCardTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testTransactionsCardRequest()
    {
        $request = new \Starling\Api\Request\Transactions\Card();
        $this->isValidRequest($request);
    }

    public function testTransactionCardRequest()
    {
        $request = new \Starling\Api\Request\Transactions\Card('test-id');
        $this->isValidRequest($request);
    }

    public function testTransactionsCardDateRangeRequest()
    {
        $request = new \Starling\Api\Request\Transactions\Card([
            'from' => new DateTime('-7 days ago'),
            'to'   => new DateTime(),
        ]);

        $this->isValidRequest($request);
    }
}
