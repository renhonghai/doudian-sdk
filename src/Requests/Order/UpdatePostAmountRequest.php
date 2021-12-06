<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class UpdatePostAmountRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/updatePostAmount";
	}


}
