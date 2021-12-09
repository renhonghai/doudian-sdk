<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class SetOfflineRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/product/setOffline";
    }


}
