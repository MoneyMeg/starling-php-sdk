<?php

namespace Starling\Tests;

use Starling\Identity;

class IdentityTest extends \PHPUnit\Framework\TestCase
{
    public function testCanSetAccessToken()
    {
        $token = "my-access-token";
        $identity = new Identity($token);
        $this->assertSame($identity->getAccessToken(), $token);
    }
}
