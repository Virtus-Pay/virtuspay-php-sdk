<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Order
{
    private $configuration;

    private $gateway;

    public function __construct()
    {
        $this->configuration = new Configuration();
        $this->gateway = new GatewaySend();
    }

    public function getAllOrders()
    {
        $uri = $this->configuration->getBaseUrl()."v1/order";
        return $this->gateway->execute('GET', $uri, "", $this->configuration->getToken());
    }

    public function getOrderByTransaction($transaction)
    {
        $uri = $this->configuration->getBaseUrl()."v1/order/".$transaction;
        return $this->gateway->execute('GET', $uri, "", $this->configuration->getToken());
    }

    public function getOrderByOrderRef($orderRef)
    {
        $uri = $this->configuration->getBaseUrl()."v1/order?order_ref=".$orderRef;
        return $this->gateway->execute('GET', $uri, "", $this->configuration->getToken());
    }

    public function save($modelOrder)
    {
        $uri = $this->configuration->getBaseUrl()."v1/order";
        $body = $modelOrder->getEncodeParams();
        return $this->gateway->execute('POST', $uri, $body, $this->configuration->getToken());
    }
}