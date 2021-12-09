<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class UpdateOrderAmountRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/updateOrderAmount";
    }


}
