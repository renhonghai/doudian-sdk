<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetShopAccountItemRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getShopAccountItem";
	}


}
