<?php

namespace VirtusPay\ApiSDK\Model;

use VirtusPay\ApiSDK\Api\ModelInterface;

class Installments implements ModelInterface
{

    private $total_amount;

    private $cpf;

    public function __construct($total_amount, $cpf)
    {
        $this->total_amount = $total_amount;
        $this->cpf = $cpf;
    }

    public function getEncodeParams()
    {
        $data = [];
        $data['total_amount'] = $this->total_amount;
        $data['cpf'] = $this->cpf;

        return json_encode($data);
    }
}