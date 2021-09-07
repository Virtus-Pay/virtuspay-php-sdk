<?php


require '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$gateway = new \VirtusPay\ApiSDK\Gateway\Order();
$orderRef = "8000126";
$response = $gateway->getOrderByOrderRef($orderRef);

print '<pre>';
print_r($response);
exit;