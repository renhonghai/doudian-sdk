<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class BatchSearchIndexRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/BatchSearchIndex";
	}


}
