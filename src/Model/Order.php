<?php

namespace VirtusPay\ApiSDK\Model;

use VirtusPay\ApiSDK\Api\ModelInterface;

class Order implements ModelInterface
{
    private $order_ref;

    private $customer;

    private $delivery_address;

    private $items = [];

    private $total_amount;

    private $installment;

    private $description;

    private $callback;

    private $return_url;

    private $channel;

    private $preapproved;

    private $others_infos;

    public function __construct(
        $order_ref,
        $customer,
        $delivery_address,
        $items,
        $total_amount,
        $installment,
        $description,
        $callback,
        $return_url,
        $channel,
        $preapproved,
        $others_infos
    ) {
        $this->order_ref = $order_ref;
        $this->customer = $customer;
        $this->delivery_address = $delivery_address;
        $this->items = $items;
        $this->total_amount = $total_amount;
        $this->installment = $installment;
        $this->description = $description;
        $this->callback = $callback;
        $this->return_url = $return_url;
        $this->channel = $channel;
        $this->preapproved = $preapproved;
        $this->others_infos = $others_infos;
    }

    public function getEncodeParams()
    {
        $data = [];

        $data['order_ref'] = $this->order_ref;
        $data['customer'] = $this->customer->getEncodeParams();
        $data['delivery_address'] = $this->delivery_address->getEncodeParams();
        $data['items'] = $this->items->getEncodeParams();
        $data['total_amount'] = $this->total_amount;
        $data['installment'] = $this->installment;
        $data['description'] = $this->description;
        $data['callback'] = $this->callback;
        $data['return_url'] = $this->return_url;
        $data['channel'] = $this->channel;
        $data['orthers_infos'] = $this->others_infos;

        if (!is_null($this->preapproved)) {
           $data['preapproved'] = $this->preapproved;
        }

        return json_encode($data);

    }

}