<?php

namespace AK\DoudianSDK\Requests\TopUp;

use AK\DoudianSDK\Requests\AbstractRequest;

class ResultRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/topup/result";
    }

}
