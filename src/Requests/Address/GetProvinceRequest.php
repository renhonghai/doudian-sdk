<?php

namespace Renhonghai\DoudianSDK\Requests\Address;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetProvinceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/getProvince";
	}


}
