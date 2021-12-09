<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class LogisticsAddMultiPackRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/logisticsAddMultiPack";
    }


}
