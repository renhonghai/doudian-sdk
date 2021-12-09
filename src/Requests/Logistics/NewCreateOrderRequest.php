<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class NewCreateOrderRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/newCreateOrder";
    }


}
