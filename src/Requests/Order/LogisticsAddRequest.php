<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class LogisticsAddRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/logisticsAdd";
	}


}
