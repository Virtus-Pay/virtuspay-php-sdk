<?php


namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Installments
{
    private $configuration;

    public function __construct()
    {
        $this->configuration = new Configuration();
    }

    public function execute($installments, $version)
    {
        $uri = $this->configuration->getBaseUrl()."v1/installments";

        if ($version == "v2") {
            $uri = $this->configuration->getBaseUrl()."v2/installments";
        }
        $body = $installments->getEncodeParams();

        $gateway = new GatewaySend();

        return $gateway->execute('POST', $uri, $body, $this->configuration::TOKEN);
    }
}