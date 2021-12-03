<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SearchListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/searchList";
	}


}
