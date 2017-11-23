<?php

namespace Starling\Api\Request\Accounts;

use Starling\Api\Request;
use Starling\Api as Base;

class Balance extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "accounts/balance";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
