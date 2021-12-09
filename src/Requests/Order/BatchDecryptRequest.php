<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class BatchDecryptRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/batchDecrypt";
    }


}
