<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class CustomTemplateListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/customTemplateList";
    }


}
