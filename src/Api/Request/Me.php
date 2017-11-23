<?php

namespace Starling\Api\Request;

use Starling\Api as Base;
use Starling\Api\Request;

class Me extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'me';

    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
