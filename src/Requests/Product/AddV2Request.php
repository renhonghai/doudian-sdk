<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddV2Request extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/product/addV2";
    }


}
