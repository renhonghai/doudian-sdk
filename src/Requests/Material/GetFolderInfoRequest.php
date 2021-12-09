<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetFolderInfoRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/getFolderInfo";
    }


}
