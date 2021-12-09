<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class ApplyLogisticsInterceptRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/applyLogisticsIntercept";
    }


}
