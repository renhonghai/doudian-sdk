<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class OrderDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/orderDetail";
	}


}
