<?php

namespace Starling\Tests;

use DateTime;

class TransactionsDDTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testTransactionsDDRequest()
    {
        $request = new \Starling\Api\Request\Transactions\DirectDebit();
        $this->isValidRequest($request);
    }

    public function testTransactionDDRequest()
    {
        $request = new \Starling\Api\Request\Transactions\DirectDebit('test-id');
        $this->isValidRequest($request);
    }

    public function testTransactionsDDDateRangeRequest()
    {
        $request = new \Starling\Api\Request\Transactions\DirectDebit([
            'from' => new DateTime('-7 days ago'),
            'to'   => new DateTime(),
        ]);

        $this->isValidRequest($request);
    }
}
