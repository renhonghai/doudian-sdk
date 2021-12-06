<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddressConfirmRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addressConfirm";
	}


}
