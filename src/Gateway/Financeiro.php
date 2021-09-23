<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Financeiro
{

    private $configuration;

    private $gateway;

    public function __construct()
    {
        $this->configuration = new Configuration();
        $this->gateway = new GatewaySend();
    }

    public function execute($data_gte, $data_lte)
    {
        $uri = $this->configuration->getBaseUrl()."v1/agenda?previsao_liquidacao_gte=".$data_gte."&previsao_liquidacao_lte=".$data_lte;
        return $this->gateway->execute('GET', $uri, "", $this->configuration->getToken());
    }
}