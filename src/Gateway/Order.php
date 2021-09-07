<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Order
{
    private $configuration;

    public function __construct()
    {
        $this->configuration = new Configuration();
    }

    public function getAllOrders()
    {
        $uri = $this->configuration->getBaseUrl()."v1/order";

        $gateway = new GatewaySend();

        return $gateway->execute('GET', $uri, "", $this->configuration::TOKEN);
    }

    public function getOrderByTransaction($transaction)
    {
        $uri = $this->configuration->getBaseUrl()."v1/order/".$transaction;

        $gateway = new GatewaySend();

        return $gateway->execute('GET', $uri, "", $this->configuration::TOKEN);
    }

    public function getOrderByOrderRef($orderRef)
    {
        $uri = $this->configuration->getBaseUrl()."v1/order?order_ref=".$orderRef;

        $gateway = new GatewaySend();

        return $gateway->execute('GET', $uri, "", $this->configuration::TOKEN);
    }

    public function save($modelOrder)
    {
        $uri = $this->configuration->getBaseUrl()."v1/order";
        $body = $modelOrder->getEncodeParams();

        $gateway = new GatewaySend();

        return $gateway->execute('POST', $uri, $body, $this->configuration::TOKEN);
    }
}