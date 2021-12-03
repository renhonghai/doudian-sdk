<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ListShopNetsiteRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/listShopNetsite";
	}


}
