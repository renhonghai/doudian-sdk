<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetServiceListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getServiceList";
	}


}
