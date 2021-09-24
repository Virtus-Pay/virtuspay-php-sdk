<?php

require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$gateway = new \VirtusPay\ApiSDK\Gateway\Order();
$response = $gateway->getAllOrders($configuration);

print '<pre>';
print_r($response);
exit;
