<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class WaybillApplyRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/waybillApply";
    }


}
