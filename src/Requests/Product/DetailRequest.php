<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class DetailRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/product/detail";
    }


}
