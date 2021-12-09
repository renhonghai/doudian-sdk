<?php

namespace AK\DoudianSDK\Requests\Material;

use AK\DoudianSDK\Requests\AbstractRequest;

class MoveMaterialToRecycleBinRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/material/moveMaterialToRecycleBin";
    }


}
