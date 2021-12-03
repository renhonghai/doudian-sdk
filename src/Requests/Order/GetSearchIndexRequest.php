<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetSearchIndexRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getSearchIndex";
	}


}
