<?php

namespace Starling\Api\Request;

use Starling\Api\Request;
use Starling\Api as Base;

class Payments extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "payments/scheduled";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
