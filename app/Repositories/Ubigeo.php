<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Ubigeo 
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all()
    {
        
        $response = $this->client->request('GET');

        return json_decode($response->getBody()->getContents());
    }

}