<?php

namespace Starling\Api\Request;

use Starling\Api as Base;
use Starling\Api\Request;

class Contacts extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'contacts';

    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;
}
