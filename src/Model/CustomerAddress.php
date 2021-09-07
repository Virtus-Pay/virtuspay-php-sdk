<?php

namespace VirtusPay\ApiSDK\Model;

use VirtusPay\ApiSDK\Api\ModelInterface;
use VirtusPay\ApiSDK\Model\Address\Address;

class CustomerAddress extends Address implements ModelInterface
{

    public function __construct(
        $state,
        $city,
        $neighborhood,
        $street,
        $number,
        $cep,
        $complement
    ) {
        parent::__construct($state, $city, $neighborhood, $street, $number, $cep, $complement);
    }

    public function getEncodeParams()
    {
        return $this->getParams();
    }
}