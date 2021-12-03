<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ServiceDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/serviceDetail";
	}


}
