<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class InfoRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/info";
	}


}
