<?php

namespace AK\DoudianSDK\Requests\Antispam;

use AK\DoudianSDK\Requests\AbstractRequest;

class OrderSendRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/antispam/orderSend";
	}


}
