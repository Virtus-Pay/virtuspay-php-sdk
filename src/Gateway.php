<?php

namespace VirtusPay\ApiSDK;

use GuzzleHttp\Client;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Gateway
{

    private function createLog($message)
    {
        $log = new Logger('log_order');
        $log->pushHandler(new StreamHandler('log/log_order.log', Logger::WARNING));

        $log->warning($message);
    }

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
            $this->createLog($e->getMessage());
        }
    }
}