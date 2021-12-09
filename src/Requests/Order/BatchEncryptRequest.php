<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class BatchEncryptRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/batchEncrypt";
    }


}
