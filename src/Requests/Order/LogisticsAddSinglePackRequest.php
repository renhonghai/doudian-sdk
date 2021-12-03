<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class LogisticsAddSinglePackRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/logisticsAddSinglePack";
	}


}
