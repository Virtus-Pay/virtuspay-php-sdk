<?php

namespace VirtusPay\ApiSDK\Model;

use VirtusPay\ApiSDK\Api\ModelInterface;

class Cancelamento implements ModelInterface
{

    private $refund_by;

    private $reason_cancellation;

    private $amount;

    private $extra_data;

    public function __construct(
        $refund_by,
        $reason_cancellation,
        $amount,
        $extra_data
    ) {
        $this->refund_by = $refund_by;
        $this->reason_cancellation = $reason_cancellation;
        $this->amount = (float) $amount;
        $this->extra_data = $extra_data;
    }

    public function getEncodeParams()
    {
        $data = [];

        $data['refund_by'] = $this->refund_by;
        $data['reason_cancellation'] = $this->reason_cancellation;
        $data['amount'] = $this->amount;
        $data['extra_data'] = $this->extra_data;

        return json_encode($data);
    }
}