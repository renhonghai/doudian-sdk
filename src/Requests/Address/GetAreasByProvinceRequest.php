<?php

namespace Renhonghai\DoudianSDK\Requests\Address;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetAreasByProvinceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/getAreasByProvince";
	}


}
