<?php

namespace AK\DoudianSDK\Requests\Sms;

use AK\DoudianSDK\Requests\AbstractRequest;

class TemplateDeleteRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/sms/template/delete";
    }


}
