<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class DownloadToShopRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/downloadToShop";
    }


}
