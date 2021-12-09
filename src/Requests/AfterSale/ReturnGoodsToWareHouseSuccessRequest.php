<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class ReturnGoodsToWareHouseSuccessRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/returnGoodsToWareHouseSuccess";
    }


}
