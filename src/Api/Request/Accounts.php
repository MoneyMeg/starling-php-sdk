<?php

namespace Starling\Api\Request;

use Starling\Api\Request;
use Starling\Api as Base;

class Accounts extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "accounts";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
