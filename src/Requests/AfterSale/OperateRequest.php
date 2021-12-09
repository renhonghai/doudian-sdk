<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class OperateRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/Operate";
    }


}
