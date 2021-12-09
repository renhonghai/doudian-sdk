<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddSerialNumberRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/addSerialNumber";
    }


}
