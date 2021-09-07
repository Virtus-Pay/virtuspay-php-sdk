<?php

namespace VirtusPay\ApiSDK\Model;

use VirtusPay\ApiSDK\Api\ModelInterface;

class PreAprovacao implements ModelInterface
{

    private $total_amount;

    private $cpf;

    private $cellphone;

    private $email;

    private $ip;

    private $others_infos;

    private $cep;

    public function __construct(
        $total_amount,
        $cpf,
        $cellphone,
        $email,
        $ip,
        $others_infos,
        $cep
    ) {
        $this->total_amount = $total_amount;
        $this->cpf = $cpf;
        $this->cellphone = $cellphone;
        $this->email = $email;
        $this->ip = $ip;
        $this->others_infos = $others_infos;
        $this->cep = $cep;
    }

    public function getEncodeParams()
    {
        $data = [];
        $data['total_amount'] = $this->total_amount;
        $data['cpf'] = $this->cpf;
        $data['cellphone'] = $this->cellphone;
        $data['email'] = $this->email;
        $data['ip'] = $this->ip;
        $data['others_info'] = $this->others_infos;
        $data['cep'] = $this->cep;

        return json_encode($data);
    }
}