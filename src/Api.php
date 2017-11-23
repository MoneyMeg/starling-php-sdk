<?php

namespace Starling;

use Starling\Exception\InvalidCAFile;

class Api
{
    const ENV_SANDBOX = 'sandbox';
    const ENV_PROD = 'prod';
    const SANDBOX_URL = 'https://api-sandbox.starlingbank.com/api';
    const PROD_URL = 'https://api.starlingbank.com/api';
    const API_VERSION = 'v1';
    const CA_FILE = 'cacert-2017-09-20.pem';
    const TYPE_POST = 'POST';
    const TYPE_GET = 'GET';
    const TYPE_DELETE = 'DELETE';
    const TYPE_PUT = 'PUT';

    /**
     * Which envrioment are we?
     *
     * @var string
     */
    protected $env = self::ENV_SANDBOX;

    /**
     * Store our identity.
     *
     * @var Starling\Identity|null
     */
    protected $identity;

    /**
     * Get our url.
     *
     * @return string
     */
    public function getUrl()
    {
        $base = $this->env == self::ENV_PROD ? self::PROD_URL : self::SANDBOX_URL;

        return $base.'/'.self::API_VERSION.'/';
    }

    /**
     * Set our env.
     *
     * @param string
     *
     * @return $this
     */
    public function setEnv($env)
    {
        $this->env = $env == self::ENV_SANDBOX || $env == self::ENV_PROD ? $env : self::ENV_SANDBOX;

        return $this;
    }

    /**
     * Set indetity.
     *
     * @param Smartling\Identity $identity
     *
     * @return $this
     */
    public function setIdentity(Identity $identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Get indetity.
     *
     * @return Smartling\Identity|null
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Get CA File.
     *
     * @return string
     */
    public function getCAFile()
    {
        $file = __DIR__.'/../data/'.self::CA_FILE;
        if (!file_exists($file)) {
            throw new InvalidCAFile();
        }

        return $file;
    }
}
