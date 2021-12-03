<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AppendSubOrderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/appendSubOrder";
	}


}
