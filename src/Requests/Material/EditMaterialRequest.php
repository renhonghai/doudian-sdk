<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class EditMaterialRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/editMaterial";
    }


}
