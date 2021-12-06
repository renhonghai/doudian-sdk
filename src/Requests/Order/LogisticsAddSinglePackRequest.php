<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class LogisticsAddSinglePackRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/logisticsAddSinglePack";
	}


}
