<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetSettleBillDetailRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/getSettleBillDetail";
    }


}
