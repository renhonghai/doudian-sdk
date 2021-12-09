<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class SearchListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/searchList";
    }


}
