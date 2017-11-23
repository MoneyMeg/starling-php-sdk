<?php

namespace Starling\Tests;

class OauthAccessTokenTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testMeRequest()
    {
        $request = new \Starling\Api\Request\Oauth\AccessToken([
            'code' => 'test',
            'client_id' => 'test',
            'client_secret' => 'test',
            'grant_type' => 'test',
            'redirect_url' => 'test'
        ]);

        $this->isValidRequest($request);
    }
}
