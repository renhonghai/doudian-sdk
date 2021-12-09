<?php

namespace AK\DoudianSDK\Requests\Spu;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddShopSpuRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/spu/addShopSpu";
    }


}
