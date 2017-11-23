<?php

namespace Starling\Api\Request\Accounts;

use Starling\Api as Base;
use Starling\Api\Request;

class Balance extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'accounts/balance';

    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
