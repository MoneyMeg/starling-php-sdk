<?php

namespace Starling\Api\Request;

use Starling\Api\Request;
use Starling\Api as Base;

class Cards extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "cards";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
