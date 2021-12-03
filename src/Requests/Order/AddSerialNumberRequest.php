<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddSerialNumberRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addSerialNumber";
	}


}
