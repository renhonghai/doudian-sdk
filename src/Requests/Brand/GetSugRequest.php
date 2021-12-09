<?php

namespace AK\DoudianSDK\Requests\Brand;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetSugRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/brand/getSug";
    }


}
