<?php

namespace AK\DoudianSDK\Requests\Spu;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetKeyPropertyByCidRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/spu/getKeyPropertyByCid";
    }


}
