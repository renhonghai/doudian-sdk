<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class UpdatePostAmountRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/updatePostAmount";
	}


}
