<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class QualityListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/product/qualityList";
    }


}
