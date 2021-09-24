<?php

require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$model = new \VirtusPay\ApiSDK\Model\Installments(
    190,
    '00122233344'
);

$gateway = new \VirtusPay\ApiSDK\Gateway\Installments();
$response = $gateway->execute($model, 'v2', $configuration);

echo $response;

exit;
