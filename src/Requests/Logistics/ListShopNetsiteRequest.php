<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListShopNetsiteRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/listShopNetsite";
	}


}
