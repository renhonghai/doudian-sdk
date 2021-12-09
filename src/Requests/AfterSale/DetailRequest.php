<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class DetailRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/Detail";
    }


}
