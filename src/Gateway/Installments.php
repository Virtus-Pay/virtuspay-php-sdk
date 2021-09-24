<?php


namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Installments
{
    public function execute($installments, $version, $configuration)
    {
        $uri = $configuration->getBaseUrl()."v1/installments";

        if ($version == "v2") {
            $uri = $configuration->getBaseUrl()."v2/installments";
        }
        $body = $installments->getEncodeParams();

        $gateway = new GatewaySend();

        return $gateway->execute('POST', $uri, $body, $configuration->getToken());
    }
}
