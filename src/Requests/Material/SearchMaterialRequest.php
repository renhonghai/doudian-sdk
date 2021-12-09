<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class SearchMaterialRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/searchMaterial";
    }


}
