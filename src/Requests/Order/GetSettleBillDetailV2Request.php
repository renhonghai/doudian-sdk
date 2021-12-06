<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetSettleBillDetailV2Request extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getSettleBillDetailV2";
	}


}
