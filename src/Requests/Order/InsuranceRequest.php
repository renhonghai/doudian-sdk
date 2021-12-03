<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class InsuranceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/insurance";
	}


}
