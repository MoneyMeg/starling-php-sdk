<?php

namespace Starling\Tests;

class SavingsGoalsTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testSavingsGoalsRequest()
    {
        $request = new \Starling\Api\Request\SavingsGoals();
        $this->isValidRequest($request);
    }

    public function testSavingsGoalRequest()
    {
        $request = new \Starling\Api\Request\SavingsGoals('test-id');
        $this->isValidRequest($request);
    }
}
