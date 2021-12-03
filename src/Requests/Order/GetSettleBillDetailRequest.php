<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetSettleBillDetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getSettleBillDetail";
	}


}
