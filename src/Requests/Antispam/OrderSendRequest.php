<?php

namespace Renhonghai\DoudianSDK\Requests\Antispam;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class OrderSendRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/antispam/orderSend";
	}


}
