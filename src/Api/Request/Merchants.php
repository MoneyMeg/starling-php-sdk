<?php

namespace Starling\Api\Request;

use Starling\Api as Base;
use Starling\Api\Request;

class Merchants extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'merchants';

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
    protected $merchant_id;

    /**
     * Build our request.
     *
     * @param string $merchant_id
     *
     * @return void
     */
    public function __construct($merchant_id = null)
    {
        $this->merchant_id = $merchant_id;
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
        if ($this->merchant_id) {
            return $this->endpoint."/{$this->merchant_id}";
        }

        return $this->endpoint;
    }
}
