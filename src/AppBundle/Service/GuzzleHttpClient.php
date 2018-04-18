<?php

namespace AppBundle\Service;

class GuzzleHttpClient implements HttpClientInterface
{
    private $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        // don't do this
        $this->client = $client;
    }

    public function get($url)
    {
        $response = $this->client->get($url);

        return json_decode($response->getBody(), true);
    }
    
    public function post($url, $data)
    {
        // not in use, but we must define this method
        // as it is part of the HttpClientInterface interface
    }
}