<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class CancelOrderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/cancelOrder";
	}


}
