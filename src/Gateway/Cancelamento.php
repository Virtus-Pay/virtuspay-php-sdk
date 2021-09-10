<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Cancelamento
{

    private $configuration;

    private $gateway;

    public function __construct()
    {
        $this->configuration = new Configuration();
        $this->gateway = new GatewaySend();
    }

    public function execute($transaction, $modelCancelamento)
    {
        $uri = $this->configuration->getBaseUrl()."v1/order/".$transaction."/void";
        $body = $modelCancelamento->getEncodeParams();
        return $this->gateway->execute('PUT', $uri, $body, $this->configuration::TOKEN);
    }
}