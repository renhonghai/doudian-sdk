<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class InsuranceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/insurance";
	}


}
