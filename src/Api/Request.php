<?php

namespace Starling\Api;

class Request implements RequestInterface
{

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint;

    /**
     * Whats our type
     *
     * @var string
     */
    protected $type;

    /**
     * Whats our values
     *
     * @var array
     */
    protected $values = [];

    /**
     * Return our endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Return our request type
     *
     * post, get, put, delete
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Return our values.
     *
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }
}
