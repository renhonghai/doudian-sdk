<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class UpdateOrderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/updateOrder";
	}


}
