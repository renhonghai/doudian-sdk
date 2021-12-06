<?php

namespace AK\DoudianSDK\Requests\Address;

use AK\DoudianSDK\Requests\AbstractRequest;

class ProvinceListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/provinceList";
	}


}
