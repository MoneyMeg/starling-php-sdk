<?php

namespace Starling\Tests;

use Starling\Api;
use Starling\Identity;

class ApiBaseTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->identity = $this->createMock(Identity::class);
        $this->identity->method('getAccessToken')
            ->willReturn('test-access-token');
    }

    public function testCanGetProdUrl()
    {
        $api = new Api();
        $api->setEnv(Api::ENV_PROD);
        $verify = 'https://api.starlingbank.com/api/v1/';
        $this->assertSame($api->getUrl(), $verify);
    }

    public function testCanGetSandboxUrl()
    {
        $api = new Api();
        $verify = 'https://api-sandbox.starlingbank.com/api/v1/';
        $this->assertSame($api->getUrl(), $verify);
    }

    public function testCanGetSetIdentity()
    {
        $api = new Api();
        $api->setIdentity($this->identity);
        $identity = $api->getIdentity();
        $this->assertSame($identity->getAccessToken(), $this->identity->getAccessToken());
    }

    public function testCanGetCAFile()
    {
        $api = new Api();
        $ca_file = $api->getCaFile();
        $this->assertTrue(!empty($ca_file));
    }
}
