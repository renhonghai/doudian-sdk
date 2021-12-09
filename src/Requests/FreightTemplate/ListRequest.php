<?php

namespace AK\DoudianSDK\Requests\FreightTemplate;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/freightTemplate/list";
    }


}
