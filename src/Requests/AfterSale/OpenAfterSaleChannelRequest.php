<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class OpenAfterSaleChannelRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/afterSale/OpenAfterSaleChannel";
    }


}
