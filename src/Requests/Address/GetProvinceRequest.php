<?php

namespace AK\DoudianSDK\Requests\Address;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetProvinceRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/address/getProvince";
    }


}
