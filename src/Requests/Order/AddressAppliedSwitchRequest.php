<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddressAppliedSwitchRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/AddressAppliedSwitch";
	}


}
