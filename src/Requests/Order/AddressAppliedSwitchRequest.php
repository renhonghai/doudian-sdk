<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddressAppliedSwitchRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/AddressAppliedSwitch";
	}


}
