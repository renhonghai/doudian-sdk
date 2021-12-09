<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class TrackNoRouteDetailRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/logistics/trackNoRouteDetail";
    }


}
