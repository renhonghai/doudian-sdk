<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class BatchSensitiveRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/batchSensitive";
    }


}
