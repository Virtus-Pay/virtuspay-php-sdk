<?php


require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$model = new \VirtusPay\ApiSDK\Model\PreAprovacao(
    20,
    '630.007.350-54',
    '42423423432',
    'ricardo@gmail.com',
    "187.65.95.12",
    [],
    '05846050'
);

$gateway = new \VirtusPay\ApiSDK\Gateway\PreAprovacao();
$response = $gateway->execute($model);

echo $response;

exit;