<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class EditRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/warehouse/edit";
    }


}
