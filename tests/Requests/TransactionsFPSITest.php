<?php

namespace Starling\Tests;

use DateTime;;

class TransactionsFPITest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testTransactionsFPIRequest()
    {
        $request = new \Starling\Api\Request\Transactions\FasterPaymentsIn();
        $this->isValidRequest($request);
    }

    public function testTransactionFPIRequest()
    {
        $request = new \Starling\Api\Request\Transactions\FasterPaymentsIn('test-id');
        $this->isValidRequest($request);
    }

    public function testTransactionsFPIDateRangeRequest()
    {
        $request = new \Starling\Api\Request\Transactions\FasterPaymentsIn([
            'from' => new DateTime("-7 days ago"),
            'to'   => new DateTime()
        ]);

        $this->isValidRequest($request);
    }
}
