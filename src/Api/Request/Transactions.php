<?php

namespace Starling\Api\Request;

use Starling\Api\Request;
use Starling\Api as Base;

class Transactions extends Request
{

    /**
     * Our date format
     *
     * @param string
     */
    const DATE_FORMAT = 'Y-m-d';

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "transactions";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;

    /**
     * From?
     *
     * @var DateTime
     */
    protected $from;

    /**
     * To?
     *
     * @var DateTime
     */
    protected $to;

    /**
     * Transaction Id
     *
     * @var string
     */
    protected $transaction_id;

    /**
     * Construct our Request
     *
     * @param string|array
     */
    public function __construct($params = null)
    {
        # If we're not an array we must be an id
        if ($params && !is_array($params)) {
            $this->transaction_id = $params;
        } elseif (isset($params['from'], $params['to']) && is_object($params['from']) && is_object($params['to'])) {
            $this->from = $params['from'];
            $this->to = $params['to'];
        }
    }

    /**
     * Get our values
     *
     * @return array
     */
    public function getValues()
    {
        $values = [];
        if (isset($this->from)) {
            $values['from'] = $this->from->format(self::DATE_FORMAT);
        }

        if (isset($this->to)) {
            $values['to'] = $this->to->format(self::DATE_FORMAT);
        }

        return $values;
    }

    /**
     * Get our endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->transaction_id ? $this->endpoint . "/{$this->transaction_id}" : $this->endpoint;
    }
}
