<?php

namespace Starling\Api\Request\Contacts;

use Starling\Api as Base;
use Starling\Api\Request;

class Accounts extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'contacts/{id}/accounts';

    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;

    /**
     * Hold our ID.
     *
     * @var string
     */
    protected $customer_id;

    /**
     * Build our request.
     *
     * @param string $customerId
     *
     * @return void
     */
    public function __construct($customerId)
    {
        $this->customer_id = $customerId;
    }

    /**
     * Get endpoint.
     *
     * If we have an id, modify endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return str_replace('{id}', $this->customer_id, $this->endpoint);
    }
}
