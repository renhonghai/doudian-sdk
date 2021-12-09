<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class CancelSendGoodsSuccessRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/CancelSendGoodsSuccess";
    }


}
