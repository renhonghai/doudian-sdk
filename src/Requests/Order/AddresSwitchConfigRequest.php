<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddresSwitchConfigRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addresSwitchConfig";
	}


}
