<?php

namespace Starling\Api\Request;

use Starling\Api as Base;
use Starling\Api\Request;

class SavingsGoals extends Request
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'savings-goals';

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
    protected $sguid;

    /**
     * Build our request.
     *
     * @param string $savingsGoalUid
     *
     * @return void
     */
    public function __construct($savingsGoalUid = null)
    {
        $this->sguid = $savingsGoalUid;
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
        if ($this->sguid) {
            return $this->endpoint."/{$this->sguid}";
        }

        return $this->endpoint;
    }
}
