<?php

namespace Starling\Api;

use Starling\Identity;
use Starling\Api\Request;
use Starling\Api as Base;
use GuzzleHttp\Client as Guzzle;

class Client extends Base
{
    /**
     * Hold our request client
     *
     * @var GuzzleHttp\Client
     */
    protected $requester;

    /**
     * Build our client.
     *
     * @param Starling\Identity $identity
     * @param array $options
     */
    public function __construct(Identity $identity, array $options = [])
    {
        if (isset($options['env'])) {
            $this->setEnv($options['env']);
        }

        if (isset($options['handler'])) {
            $this->setEnv($options['env']);
        }

        $this->setIdentity($identity);
        $this->requester = new Guzzle([
            'base_uri' => $this->getUrl(),
            'headers'  => [
                'User-Agent'    => 'Starling PHP SDK',
                'Accept'        => 'application/json',
                'Authorization' => 'Bearer ' . $this->getIdentity()->getAccessToken(),
            ],
            'stream'        => false,
            'synchronous'   => true,
            'verify'        => $this->getCAFile(),
        ]);
    }

    /**
     * Get our requester
     *
     * @return Guzzle\Client
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Do a get request
     *
     * @param string $endpoint
     * @param array $values
     * @return Guzzle\Response
     */
    public function get($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('GET', $endpoint, $values);
    }

    /**
     * Do a post request
     *
     * @param string $endpoint
     * @param array $values
     * @return Guzzle\Response
     */
    public function post($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('POST', $endpoint, $values);
    }

    /**
     * Do a put request
     *
     * @param string $endpoint
     * @param array $values
     * @return Guzzle\Response
     */
    public function put($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('PUT', $endpoint, $values);
    }

    /**
     * Do a delete request
     *
     * @param string $endpoint
     * @param array $values
     * @return Guzzle\Response
     */
    public function delete($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('DELETE', $endpoint);
    }

    /**
     * Perform a Request
     *
     * @param Request $request
     * @return Guzzle\Response
     */
    public function request(Request $request)
    {
        $client = $this->getRequester();

        if ($request->getType() == Base::TYPE_GET) {
            $body = ['query' => $request->getValues()];
        } else {
            $body = ['body' => json_encode($request->getValues())];
        }

        return $client->request(
            $request->getType(),
            $request->getEndpoint(),
            $body
        );
    }
}
