<?php

namespace AK\DoudianSDK\Requests\Brand;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/brand/list";
    }


}
