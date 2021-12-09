<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class CreateBatchRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/warehouse/createBatch";
    }


}
