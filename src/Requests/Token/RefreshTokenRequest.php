<?php

namespace AK\DoudianSDK\Requests\Token;

use AK\DoudianSDK\Requests\AbstractRequest;

class RefreshTokenRequest extends AbstractRequest
{

    //通用方法
    public function getUrlPath(): string
    {
        return "/token/refresh";
    }

}