<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class OrderDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/orderDetail";
	}


}
