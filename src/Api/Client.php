<?php

namespace Starling\Api;

use GuzzleHttp\Client as Guzzle;
use Starling\Api as Base;
use Starling\Identity;

class Client extends Base
{
    /**
     * Hold our request client.
     *
     * @var GuzzleHttp\Client
     */
    protected $requester;

    /**
     * Form request
     *
     * @var bool
     */
    protected $form_client = false;

    /**
     * Build our client.
     *
     * @param Starling\Identity $identity
     * @param array             $options
     */
    public function __construct(Identity $identity, array $options = [])
    {
        $this->setIdentity($identity);

        if (isset($options['form'])) {
            $this->form_client = true;
            $headers = [
                'User-Agent'    => 'Starling PHP SDK',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ];
        } else {
            $headers = [
                'User-Agent'    => 'Starling PHP SDK',
                'Accept'        => 'application/json',
                'Authorization' => 'Bearer '.$this->getIdentity()->getAccessToken(),
            ];
        }

        if (isset($options['env'])) {
            $this->setEnv($options['env']);
        }

        if (isset($options['handler'])) {
            $this->setEnv($options['env']);
        }

        $this->requester = new Guzzle([
            'base_uri' => $this->getUrl(),
            'headers'  => $headers,
            'stream'        => false,
            'synchronous'   => true,
            'verify'        => $this->getCAFile(),
        ]);
    }

    /**
     * Get our requester.
     *
     * @return Guzzle\Client
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Do a get request.
     *
     * @param string $endpoint
     * @param array  $values
     *
     * @return Guzzle\Response
     */
    public function get($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('GET', $endpoint, $values);
    }

    /**
     * Do a post request.
     *
     * @param string $endpoint
     * @param array  $values
     *
     * @return Guzzle\Response
     */
    public function post($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('POST', $endpoint, $values);
    }

    /**
     * Do a put request.
     *
     * @param string $endpoint
     * @param array  $values
     *
     * @return Guzzle\Response
     */
    public function put($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('PUT', $endpoint, $values);
    }

    /**
     * Do a delete request.
     *
     * @param string $endpoint
     * @param array  $values
     *
     * @return Guzzle\Response
     */
    public function delete($endpoint = '/', array $values = [])
    {
        $client = $this->getRequester();
        return $client->request('DELETE', $endpoint);
    }

    /**
     * Perform a Request.
     *
     * @param Request $request
     *
     * @return Guzzle\Response
     */
    public function request(Request $request)
    {
        $client = $this->getRequester();

        if ($this->form_client) {
            $body = ['form_params' => $request->getValues()];
        } elseif ($request->getType() == Base::TYPE_GET) {
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
