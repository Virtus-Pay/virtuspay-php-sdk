<?php

namespace VirtusPay\ApiSDK\Model\Items;

use VirtusPay\ApiSDK\Api\ModelInterface;

class Items implements ModelInterface
{

    private $product;

    private $price;

    private $detail;

    private $quantity;

    private $category;

    public function __construct(
        $product,
        $price,
        $detail,
        $quantity,
        $category
    ) {
        $this->product = $product;
        $this->price = $price;
        $this->detail = $detail;
        $this->quantity = $quantity;
        $this->category = $category;
    }

    public function getEncodeParams()
    {
        $data = [];
        $data['product'] = $this->product;
        $data['price'] = $this->price;
        $data['detail'] = $this->detail;
        $data['quantity'] = $this->quantity;
        $data['category'] = $this->category;

        return $data;
    }
}