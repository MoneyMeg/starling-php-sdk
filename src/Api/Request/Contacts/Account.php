<?php

namespace Starling\Api\Request\Contacts;

use Starling\Api\Request;
use Starling\Api as Base;
use Starling\Exception\RequiredValuesMissing;

class Account extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "contacts/{customerId}/accounts/{accountId}";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;

    /**
     * Hold our ID
     *
     * @var string
     */
    protected $customer_id;

    /**
     * Hold our Account ID
     *
     * @var string
     */
    protected $account_id;

    /**
     * Build our request
     *
     * @param array $values
     * @return void
     */
    public function __construct($values = [])
    {
        if (!isset($values['customer_id'], $values['account_id'])) {
            throw new RequiredValuesMissing(['customer_id', 'account_id']);
        }

        $this->customer_id = $values['customer_id'];
        $this->account_id = $values['account_id'];
    }

    /**
     * Get endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return strtr($this->endpoint, [
            "{customerId}" => $this->customer_id,
            "{accountId}" => $this->account_id
        ]);
    }
}
