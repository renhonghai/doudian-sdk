<?php

namespace AK\DoudianSDK\Requests\Address;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetAreasByProvinceRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/address/getAreasByProvince";
    }


}
