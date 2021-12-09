<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class DeleteFolderRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/deleteFolder";
    }


}
