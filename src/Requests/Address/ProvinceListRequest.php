<?php

namespace Renhonghai\DoudianSDK\Requests\Address;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ProvinceListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/provinceList";
	}


}
