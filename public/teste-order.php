<?php

require  '../vendor/autoload.php';

$configuration = new \VirtusPay\ApiSDK\Configuration();
$configuration->setEnvironment('homolog');

$items = [];
$items[0]['product'] = 'Roupa Branca';
$items[0]['price'] = 1000.10;
$items[0]['detail'] = 'Roupa estampada branca';
$items[0]['quantity'] = 1;
$items[0]['category'] = 'CLOTHING';

$items[1]['product'] = 'Roupa Preta';
$items[1]['price'] = 1000.10;
$items[1]['detail'] = 'Roupa estampada preta';
$items[1]['quantity'] = 1;
$items[1]['category'] = 'CLOTHING';

$modelItems = new \VirtusPay\ApiSDK\Model\Items($items);

$deliveryAddress = new \VirtusPay\ApiSDK\Model\DeliveryAddress(
    'RJ', 'RIO DE JANEIRO', 'SANTA', 'FRANCISCO VOLANTE', '123',
    '23560000', 'apt. 20'
);

$customerAddress = new \VirtusPay\ApiSDK\Model\CustomerAddress(
    'RJ', 'RIO DE JANEIRO', 'SANTA', 'FRANCISCO VOLANTE', '123',
    '23560000', 'apt. 20'
);

$customer = new \VirtusPay\ApiSDK\Model\Customer(
    "JOSE JOÃO DA SILVA PACHECO", "05439051031", 1500.00, "teste@wooza.com.br",
    "21982459255", "1954-12-19", $customerAddress
);

$order = new \VirtusPay\ApiSDK\Model\Order(
    "304560857291-4", $customer, $deliveryAddress, $modelItems, 2000.20, 12,
    "Roupa branca, Roupa preta", "https://www.minhaloja.com.br/api2/virtus_callback",
    "https://www.minhaloja.com.br/checkout?order=304560857291&closed=true", "checkout",
    null
);

$gateway = new \VirtusPay\ApiSDK\Gateway\Order();
$response = $gateway->save($order);

print '<pre>';
print_r($response);
exit;