<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetShopAccountItemRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getShopAccountItem";
	}


}
