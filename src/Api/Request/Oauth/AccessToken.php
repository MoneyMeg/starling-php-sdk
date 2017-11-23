<?php

namespace Starling\Api\Request\Oauth;

use Starling\Api\Request;
use Starling\Api as Base;
use Starling\Exception\RequiredValuesMissing;

class AccessToken extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "oauth/access-token";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_POST;

    /**
     * Construct our Request
     *
     * @param string|array
     */
    public function __construct($params = null)
    {
        if (!isset(
            $params['code'],
            $params['client_id'],
            $params['client_secret'],
            $params['grant_type'],
            $params['redirect_url']
        )) {
            throw new RequiredValuesMissing;
        }

        $this->values = $params;
    }
}
