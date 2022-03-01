<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class RejectReasonCodeListRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/rejectReasonCodeList";
    }

}
