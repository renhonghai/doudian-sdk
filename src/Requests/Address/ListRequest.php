<?php

namespace AK\DoudianSDK\Requests\Address;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/address/list";
    }


}
