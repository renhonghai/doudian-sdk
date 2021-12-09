<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetCustomTemplateListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/getCustomTemplateList";
    }


}
