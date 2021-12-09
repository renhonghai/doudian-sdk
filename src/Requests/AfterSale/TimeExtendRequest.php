<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class TimeExtendRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/timeExtend";
    }


}
