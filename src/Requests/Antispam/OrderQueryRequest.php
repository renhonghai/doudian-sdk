<?php

namespace AK\DoudianSDK\Requests\Antispam;

use AK\DoudianSDK\Requests\AbstractRequest;

class OrderQueryRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/antispam/orderQuery";
    }


}
