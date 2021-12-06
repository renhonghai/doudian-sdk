<?php

namespace AK\DoudianSDK\Requests\Token;

use AK\DoudianSDK\Requests\AbstractRequest;

class CreateTokenRequest extends AbstractRequest
{

    //通用方法
    public function getUrlPath(): string
    {
        return "/token/create";
    }

}