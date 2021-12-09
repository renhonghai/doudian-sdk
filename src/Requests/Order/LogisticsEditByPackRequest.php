<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class LogisticsEditByPackRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/logisticsEditByPack";
    }


}
