<?php

require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$gateway = new \VirtusPay\ApiSDK\Gateway\Order();
$transaction = "ace873ea-9584-4cd5-b544-767aa5103d78";
$response = $gateway->getOrderByTransaction($transaction, $configuration);

print '<pre>';
print_r($response);
exit;
