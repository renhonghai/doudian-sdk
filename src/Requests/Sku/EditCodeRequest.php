<?php

namespace AK\DoudianSDK\Requests\Sku;

use AK\DoudianSDK\Requests\AbstractRequest;

class EditCodeRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/sku/editCode";
    }


}
