<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddressModifyRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addressModify";
	}


}
