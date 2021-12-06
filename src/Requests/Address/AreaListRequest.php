<?php

namespace AK\DoudianSDK\Requests\Address;

use AK\DoudianSDK\Requests\AbstractRequest;

class AreaListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/areaList";
	}


}
