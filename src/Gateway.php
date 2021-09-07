<?php

namespace VirtusPay\ApiSDK;

use GuzzleHttp\Client;

class Gateway
{

    public function execute(
        $method = 'POST',
        $uri,
        $body,
        $token
    ) {

        $client = new Client();
        $response = $client->request(
            'POST',
            $uri,
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Token ' . $token,
                    'Accept-Charset' => 'utf-8'
                ],
                'body' => $body
            ]
        );

        return $response->getBody()->__toString();
    }
}