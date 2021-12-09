<?php

namespace AK\DoudianSDK\Requests\Antispam;

use AK\DoudianSDK\Requests\AbstractRequest;

class UserLoginRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/antispam/userLogin";
    }


}
