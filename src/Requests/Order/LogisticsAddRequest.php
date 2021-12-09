<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class LogisticsAddRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/logisticsAdd";
    }


}
