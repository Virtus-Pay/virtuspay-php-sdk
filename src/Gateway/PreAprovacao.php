<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class PreAprovacao
{

    private $configuration;

    public function __construct()
    {
        $this->configuration = new Configuration();
    }

    public function execute($preAprovacaoModel)
    {
        $uri = $this->configuration->getBaseUrl()."preapproved";
        $body = $preAprovacaoModel->getEncodeParams();

        $gateway = new GatewaySend();

        return $gateway->execute('POST', $uri, $body, $this->configuration::TOKEN);
    }

}