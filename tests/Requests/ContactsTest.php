<?php

namespace Starling\Tests;

class ContactsTest extends \PHPUnit\Framework\TestCase
{
    private function isValidRequest($request)
    {
        $this->assertTrue(is_object($request));
        $this->assertTrue(!empty($request->getEndpoint()));
        $this->assertTrue(is_array($request->getValues()));
    }

    public function testContactsRequest()
    {
        $request = new \Starling\Api\Request\Contacts();
        $this->isValidRequest($request);
    }

    public function testContactsContactRequest()
    {
        $request = new \Starling\Api\Request\Contacts\Contact('test-id');
        $this->isValidRequest($request);
    }

    public function testContactsContactAccountsRequest()
    {
        $request = new \Starling\Api\Request\Contacts\Accounts('test-id');
        $this->isValidRequest($request);
    }

    public function testContactsContactAccountRequest()
    {
        $request = new \Starling\Api\Request\Contacts\Account([
            'customer_id' => 'test-id',
            'account_id'  => 'test-id',
        ]);

        $this->isValidRequest($request);
    }

    /**
     * @expectedException Starling\Exception\RequiredValuesMissing
     */
    public function testContactsContactAccountExceptionRequest()
    {
        $request = new \Starling\Api\Request\Contacts\Account([
            'customer_id' => 'test-id',
        ]);
    }
}
