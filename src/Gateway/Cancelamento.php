<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Cancelamento
{

    private $gateway;

    public function __construct()
    {
        $this->gateway = new GatewaySend();
    }

    public function execute($transaction, $modelCancelamento, $configuration)
    {
        $uri = $configuration->getBaseUrl()."v1/order/".$transaction."/void";
        $body = $modelCancelamento->getEncodeParams();
        return $this->gateway->execute('PUT', $uri, $body, $configuration->getToken());
    }

    public function getStatusOrder($transaction, $configuration)
    {
        $uri = $configuration->getBaseUrl()."v1/order/".$transaction."/void";
        return $this->gateway->execute('GET', $uri, "", $configuration->getToken());
    }
}
