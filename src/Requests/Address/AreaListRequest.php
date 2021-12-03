<?php

namespace Renhonghai\DoudianSDK\Requests\Address;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AreaListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/areaList";
	}


}
