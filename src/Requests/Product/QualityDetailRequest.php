<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class QualityDetailRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/product/qualityDetail";
    }


}
