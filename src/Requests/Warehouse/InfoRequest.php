<?php

namespace Renhonghai\DoudianSDK\Requests\Warehouse;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class InfoRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/info";
	}


}
