<?php

namespace Starling\Api\Request\Merchants;

use Starling\Api\Request;
use Starling\Api as Base;
use Starling\Exception\RequiredValuesMissing;

class Location extends Request
{
    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $endpoint = "merchants/{merchant_id}/locations/{merchant_location_id}";

    /**
     * Whats our endpoint
     *
     * @var string
     */
    protected $type = Base::TYPE_GET;

    /**
     * Hold our ID
     *
     * @var string
     */
    protected $merchant_id;

    /**
     * Hold our Location ID
     *
     * @var string
     */
    protected $merchant_location_id;

    /**
     * Build our request
     *
     * @param array $values
     * @return void
     */
    public function __construct($values = [])
    {
        if (!isset($values['merchant_id'], $values['merchant_location_id'])) {
            throw new RequiredValuesMissing(['merchant_id', 'merchant_location_id']);
        }

        $this->merchant_id = $values['merchant_id'];
        $this->merchant_location_id = $values['merchant_location_id'];
    }

    /**
     * Get endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return strtr($this->endpoint, [
            "{merchant_id}" => $this->merchant_id,
            "{merchant_location_id}" => $this->merchant_location_id
        ]);
    }
}
