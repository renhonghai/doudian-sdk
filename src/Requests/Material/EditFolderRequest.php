<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class EditFolderRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/editFolder";
    }


}
