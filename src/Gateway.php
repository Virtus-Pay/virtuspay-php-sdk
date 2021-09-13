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

        try {
            $client = new Client();

            $response = $client->request(
                $method,
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
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}