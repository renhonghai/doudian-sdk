<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddressModifyRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addressModify";
	}


}
