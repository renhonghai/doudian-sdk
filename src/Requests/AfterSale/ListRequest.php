<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/List";
    }


}
