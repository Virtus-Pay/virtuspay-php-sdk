<?php

namespace VirtusPay\ApiSDK\Model\Address;

abstract class Address
{

    protected $state;

    protected $city;

    protected $neighborhood;

    protected $street;

    protected $number;

    protected $cep;

    protected $complement;

    public function __construct(
        $state,
        $city,
        $neighborhood,
        $street,
        $number,
        $cep,
        $complement
    ) {
        $this->state = $state;
        $this->city = $city;
        $this->neighborhood = $neighborhood;
        $this->street = $street;
        $this->number = $number;
        $this->cep = $cep;
        $this->complement = $complement;
    }

    public function getParams()
    {
        $data = [];
        $data['state'] = $this->state;
        $data['city'] = $this->city;
        $data['neighborhood'] = $this->neighborhood;
        $data['street'] = $this->street;
        $data['number'] = $this->number;
        $data['cep'] = $this->cep;
        $data['complement'] = $this->complement;

        return $data;
    }

}