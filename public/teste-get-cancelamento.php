<?php

require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$gateway = new \VirtusPay\ApiSDK\Gateway\Cancelamento();
$response = $gateway->getStatusOrder('e43d3ff0-0149-4475-8655-34fa05c077f5');

echo $response;

exit;