<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetCatePropertyV2Request extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/product/getCatePropertyV2";
    }


}
