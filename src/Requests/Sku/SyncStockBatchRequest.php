<?php

namespace AK\DoudianSDK\Requests\Sku;

use AK\DoudianSDK\Requests\AbstractRequest;

class SyncStockBatchRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/sku/syncStockBatch";
    }


}
