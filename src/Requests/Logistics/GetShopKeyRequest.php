<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetShopKeyRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/getShopKey";
    }


}
