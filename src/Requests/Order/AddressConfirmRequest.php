<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddressConfirmRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addressConfirm";
	}


}
