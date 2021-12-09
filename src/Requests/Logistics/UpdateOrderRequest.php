<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class UpdateOrderRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/updateOrder";
    }


}
