<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddOrderRemarkRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/addOrderRemark";
	}


}
