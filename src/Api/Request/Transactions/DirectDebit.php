<?php

namespace Starling\Api\Request\Transactions;

use Starling\Api\Request\Transactions;

class DirectDebit extends Transactions
{
    /**
     * Whats our endpoint.
     *
     * @var string
     */
    protected $endpoint = 'transactions/direct-debit';
}
