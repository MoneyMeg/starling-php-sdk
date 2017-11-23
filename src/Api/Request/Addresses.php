<?php

namespace Starling\Api\Request;

use Starling\Api as Base;
use Starling\Api\Request;

class Addresses extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'addresses';

    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
