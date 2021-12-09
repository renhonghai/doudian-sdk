<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class AppendSubOrderRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/appendSubOrder";
    }


}
