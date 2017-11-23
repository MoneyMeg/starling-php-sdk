<?php

namespace Starling\Api\Request\Transactions;

use Starling\Api\Request\Transactions;

class FasterPaymentsIn extends Transactions
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'transactions/fps/in';
}
