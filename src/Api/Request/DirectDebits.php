<?php

namespace Starling\Api\Request;

use Starling\Api as Base;
use Starling\Api\Request;

class DirectDebits extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'direct-debit/mandates';

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
    protected $mandate_id;

    /**
     * Build our request.
     *
     * @param string $mandateUid
     *
     * @return void
     */
    public function __construct($mandateUid = null)
    {
        $this->mandate_id = $mandateUid;
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
        if ($this->mandate_id) {
            return $this->endpoint."/{$this->mandate_id}";
        }

        return $this->endpoint;
    }
}
