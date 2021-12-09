<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class RecoverFolderRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/recoverFolder";
    }


}
