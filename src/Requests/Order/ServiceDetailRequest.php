<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class ServiceDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/serviceDetail";
	}


}
