<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class UploadVideoAsyncRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/uploadVideoAsync";
    }


}
