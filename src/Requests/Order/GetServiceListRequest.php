<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetServiceListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getServiceList";
	}


}
