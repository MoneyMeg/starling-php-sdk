<?php

namespace Starling\Tests;

use DateTime;;

class TransactionsFPOTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testTransactionsFPORequest()
    {
        $request = new \Starling\Api\Request\Transactions\FasterPaymentsOut();
        $this->isValidRequest($request);
    }

    public function testTransactionFPORequest()
    {
        $request = new \Starling\Api\Request\Transactions\FasterPaymentsOut('test-id');
        $this->isValidRequest($request);
    }

    public function testTransactionsFPODateRangeRequest()
    {
        $request = new \Starling\Api\Request\Transactions\FasterPaymentsOut([
            'from' => new DateTime("-7 days ago"),
            'to'   => new DateTime()
        ]);

        $this->isValidRequest($request);
    }
}
