<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class SetOnlineRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/product/setOnline";
    }


}
