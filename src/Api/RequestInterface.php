<?php

namespace Starling\Api;

interface RequestInterface
{
    /**
     * Return our endpoint.
     *
     * @return string
     */
    public function getEndpoint();

    /**
     * Return our request type.
     *
     * post, get, put, delete
     *
     * @return string
     */
    public function getType();

    /**
     * Return our values.
     *
     * @return array
     */
    public function getValues();
}
