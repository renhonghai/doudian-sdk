<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetSearchIndexRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/getSearchIndex";
    }


}
