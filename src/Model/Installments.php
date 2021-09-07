<?php

namespace VirtusPay\ApiSDK\Model;


class Installments
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