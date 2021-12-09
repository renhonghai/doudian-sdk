<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class DownloadShopAccountItemRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/downloadShopAccountItem";
    }


}
