<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class RecoverMaterialRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/recoverMaterial";
    }


}
