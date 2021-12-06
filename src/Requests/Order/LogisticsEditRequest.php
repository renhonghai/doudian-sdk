<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class LogisticsEditRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/logisticsEdit";
	}


}
