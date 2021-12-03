<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CancelOrderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/cancelOrder";
	}


}
