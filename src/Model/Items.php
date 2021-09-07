<?php

namespace VirtusPay\ApiSDK\Model;

use VirtusPay\ApiSDK\Api\ModelInterface;
use VirtusPay\ApiSDK\Model\Items\Items as ItemsObject;

class Items implements ModelInterface
{

    private $items = [];

    public function __construct(
        $items
    ) {
        $this->items = $items;
    }

    public function getEncodeParams()
    {
        $data = [];
        if (!empty($this->items)) {
            foreach ($this->items as $item) {
                $itemsObject = new ItemsObject(
                    $item['product'],
                    $item['price'],
                    $item['detail'],
                    $item['quantity'],
                    $item['category']
                );

                $data[] = $itemsObject->getEncodeParams();
            }
        }

        return $data;
    }

}