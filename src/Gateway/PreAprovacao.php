<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class PreAprovacao
{

    public function execute($preAprovacaoModel, $configuration)
    {
        $uri = $configuration->getBaseUrl()."preapproved";
        $body = $preAprovacaoModel->getEncodeParams();

        $gateway = new GatewaySend();

        return $gateway->execute('POST', $uri, $body, $configuration->getToken());
    }

}
