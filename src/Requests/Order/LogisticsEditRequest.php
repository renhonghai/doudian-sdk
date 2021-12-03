<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class LogisticsEditRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/logisticsEdit";
	}


}
