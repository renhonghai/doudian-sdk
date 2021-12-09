<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class CreateSFOrderRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/createSFOrder";
    }


}
