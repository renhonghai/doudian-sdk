<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class LogisticsEditByPackRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/logisticsEditByPack";
	}


}
