<?php

namespace Starling\Api\Request;

use Starling\Api\Request;
use Starling\Api as Base;

class Customer extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "customers";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
