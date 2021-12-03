<?php

namespace Renhonghai\DoudianSDK\Requests\Token;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CreateTokenRequest extends AbstractRequest
{

    //通用方法
    public function getUrlPath(): string
    {
        return "/token/create";
    }

}