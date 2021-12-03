<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class TrackNoRouteDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/trackNoRouteDetail";
	}


}
