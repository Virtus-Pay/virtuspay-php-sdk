<?php

require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');


$gateway = new \VirtusPay\ApiSDK\Gateway\Financeiro();
$response = $gateway->execute('2010-01-01', '2021-09-01', $configuration);

echo $response;

exit;
