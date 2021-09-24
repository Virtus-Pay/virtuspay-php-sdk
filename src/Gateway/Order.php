<?php

namespace VirtusPay\ApiSDK\Gateway;

use VirtusPay\ApiSDK\Configuration;
use VirtusPay\ApiSDK\Gateway as GatewaySend;

class Order
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = new GatewaySend();
    }

    public function getAllOrders($configuration)
    {
        $uri = $configuration->getBaseUrl()."v1/order";
        return $this->gateway->execute('GET', $uri, "", $configuration->getToken());
    }

    public function getOrderByTransaction($transaction, $configuration)
    {
        $uri = $configuration->getBaseUrl()."v1/order/".$transaction;
        return $this->gateway->execute('GET', $uri, "", $configuration->getToken());
    }

    public function getOrderByOrderRef($orderRef, $configuration)
    {
        $uri = $configuration->getBaseUrl()."v1/order?order_ref=".$orderRef;
        return $this->gateway->execute('GET', $uri, "", $configuration->getToken());
    }

    public function save($modelOrder, $configuration)
    {
        $uri = $configuration->getBaseUrl()."v1/order";
        $body = $modelOrder->getEncodeParams();
        return $this->gateway->execute('POST', $uri, $body, $configuration->getToken());
    }
}
