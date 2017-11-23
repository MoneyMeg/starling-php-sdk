<?php

namespace Starling;

class Identity
{
    /**
     * Hold our access token
     *
     * @var string
     */
    protected $access_token;

    /**
     * Construct our identity
     *
     * @param $access_token
     * @return void
     */
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Get our token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
}
