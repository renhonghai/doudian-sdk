<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddresSwitchConfigRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addresSwitchConfig";
	}


}
