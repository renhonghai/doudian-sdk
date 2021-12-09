<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class UploadImageSyncRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/uploadImageSync";
    }


}
