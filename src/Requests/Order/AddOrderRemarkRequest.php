<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddOrderRemarkRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addOrderRemark";
	}


}
