<?php

namespace AK\DoudianSDK\Requests\Sku;

use AK\DoudianSDK\Requests\AbstractRequest;

class SyncStockRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/sku/syncStock";
    }


}
