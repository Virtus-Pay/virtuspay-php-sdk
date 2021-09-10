<?php

require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$cancelamento = new \VirtusPay\ApiSDK\Model\Cancelamento(
    'ORPAG',
    'Motivo de Cancelamento',
    412.90,
    [
        'bank_code' => '341',
        'bank_branch' => '43233',
        'bank_account' => '32432-4'
    ]
);

$gateway = new \VirtusPay\ApiSDK\Gateway\Cancelamento();
$response = $gateway->execute('d971345d-b147-48a6-8cbb-ff8d1443bece', $cancelamento);

echo $response;

exit;