<?php

namespace VirtusPay\ApiSDK\Model;

use VirtusPay\ApiSDK\Api\ModelInterface;

class Customer implements ModelInterface
{

    private $full_name;

    private $cpf;

    private $income;

    private $email;

    private $cellphone;

    private $birthdate;

    private $customer_address;

    public function __construct(
        $full_name,
        $cpf,
        $income,
        $email,
        $cellphone,
        $birthdate,
        $customer_address
    ) {
        $this->full_name = $full_name;
        $this->cpf = $cpf;
        $this->income = $income;
        $this->email = $email;
        $this->cellphone = $cellphone;
        $this->birthdate = $birthdate;
        $this->customer_address = $customer_address;
    }

    public function getEncodeParams()
    {
        $data = [];

        $data['full_name'] = $this->full_name;
        $data['cpf'] = $this->cpf;
        $data['income'] = $this->income;
        $data['email'] = $this->email;
        $data['cellphone'] = $this->cellphone;
        $data['birthdate'] = $this->birthdate;
        $data['customer_address'] = $this->customer_address->getEncodeParams();

        return $data;
    }

}